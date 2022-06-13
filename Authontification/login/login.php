<?php
// Initialize the session
session_start();

include "AuthenticationManager.php";

$authManager = new AuthenticationManager();
 
// Check if the user is already logged in, if yes then redirect him to welcome page
if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true){
    header("location: ../index.php");
    exit;
}
 
// Include config file
require_once "AuthenticationManager.php";
 
// Define variables and initialize with empty values
$email = $password = "";
$email_err = $password_err = $login_err = "";

// Processing form data when form is submitted
if($_SERVER["REQUEST_METHOD"] == "POST"){
 
    // Check if email is empty
    if(isset($_POST['email'])){
 
        if(empty(trim($_POST["email"]))){
        $email_err = "Please enter email.";
        } else{
        $email = trim($_POST["email"]);
            
            
            $email = $_POST["email"];
         }
        
    }
  
    
    // Check if password is empty
    if(isset($_POST['password'])){ 
    if(empty(trim($_POST["password"]))){
        $password_err = "Please enter your password.";
    } else{
        $password = trim($_POST["password"]);
    }
}
    // Validate credentials
    if(empty($email_err) && empty($password_err)){
        $hasLoging = $authManager->login($password, $email);
        if($hasLoging == true){
            // Redirect user to welcome page
              header("location: ../index.php");
        } else{
          // Password is not valid, display a generic error message
            $login_err = "Invalid email or password.";
          } 
    } else{
                echo "Oops! Something went wrong. Please try again later.";
    }     
}
?>
 
 <!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>TeamHost - Join now and play mighty games!</title>
    <meta content="Templines" name="author">
    <meta content="TeamHost" name="description">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="HandheldFriendly" content="true">
    <meta name="format-detection" content="telephone=no">
    <meta content="IE=edge" http-equiv="X-UA-Compatible">
    <link rel="shortcut icon" href="assets/img/favicon.png" type="image/x-icon">
    <link rel="stylesheet" href="assets/css/libs.min.css">
    <link rel="stylesheet" href="assets/css/main.css">


    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Marcellus&display=swap" rel="stylesheet">


</head>

<body class="page-login">

    <input id="toggle" type="checkbox">
    <script type="text/javascript">
        document.getElementById("toggle").addEventListener("click", function() {
            document.getElementsByTagName('body')[0].classList.toggle("dark-theme");
        });

    </script>

        <div id="page-preloader">
        <div class="preloader-1">
            <div class="loader-text">Loading</div>
            <span class="line line-1"></span>
            <span class="line line-2"></span>
            <span class="line line-3"></span>
            <span class="line line-4"></span>
            <span class="line line-5"></span>
            <span class="line line-6"></span>
            <span class="line line-7"></span>
            <span class="line line-8"></span>
            <span class="line line-9"></span>
        </div>

    </div>

    <div class="page-wrapper">
        <main class="page-first-screen">
            <div class="uk-grid uk-grid-small uk-child-width-1-2@s uk-flex-middle uk-width-1-1" data-uk-grid>
                <div class="logo-big">
                    <img src="assets/img/logo-big.png" alt="logo" class="animation-navspinv">
                    <span>TeamHost</span>
                    <h1>Join now and play mighty games!</h1>
                </div>
                <div>
                    <div class="form-login">
                        <div class="form-login__social">
                            <ul class="social">
                                <li><a href="http://www.google.com"><img src="assets/img/google.svg" alt="google"></a></li>
                                <li><a href="http://www.facebook.com"><img src="assets/img/facebook.svg" alt="facebook"></a></li>
                                <li><a href="http://www.twitter.com"><img src="assets/img/twitter.svg" alt="twitter"></a></li>
                            </ul>
                        </div>
                        <?php 
        if(!empty($login_err)){
            echo '<div class="alert alert-danger">' . $login_err . '</div>';
        }        
        ?>

         <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
                        <div class="form-login__box">
                            <div class="uk-heading-line uk-text-center"><span>or with Email</span></div>
                            <form action="#!">
                                <div class="uk-margin"><input class="uk-input" type="email" placeholder="Email" <?php echo (!empty($email_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $email; ?>"></div>
                                <?php echo $email_err; ?>
                                <!-- <div class="uk-margin"><input class="uk-input" type="text" placeholder="Username"></div> -->
                                <div class="uk-margin"><input class="uk-input" type="password" placeholder="Password" <?php echo (!empty($password_err)) ? 'is-invalid' : ''; ?>></div>
                                <?php echo $password_err; ?>
                                <div class="uk-margin"><button class="uk-button uk-button-danger uk-width-1-1" type="button">Register</button></div>
                                <div class="uk-text-center"><span>Already have an account?</span><a class="uk-margin-small-left" href="signup.php">Sign-up</a></div>
                                
                                
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </div>

    <script src="assets/js/libs.js"></script>
    <script src="assets/js/main.js"></script>
</body>

</html>