<?php
 include "AuthenticationManager.php";

    $authManager = new AuthenticationManager();
    $user = new User();


 
// Define variables and initialize with empty values
$firstname = $lastname = $password = $confirm_password = $email= "";
$firstname_err = $lastname_err= $password_err = $confirm_password_err = $email_err = "";
 
// Processing form data when form is submitted
if($_SERVER["REQUEST_METHOD"] == "POST"){
 
    // Validate firstname
    if(empty(trim($_POST["firstname"]))){
        $firstname = "Please enter a firstname.";
    } else {
        $firstname = trim($_POST["firstname"]);

    }

       // Validate lastname
       if(empty(trim($_POST["lastname"]))){
        $lastname = "Please enter a lastname.";
    }else {
        $lastname = trim($_POST["lastname"]);

    }
    
    // Validate password
    if(empty(trim($_POST["password"]))){
        $password_err = "Please enter a password.";     
    } elseif(strlen(trim($_POST["password"])) < 6){
        $password_err = "Password must have atleast 6 characters.";
    } else{
        $password = trim($_POST["password"]);
    }
    
    
    // Validate confirm password
    if(empty(trim($_POST["confirm_password"]))){
        $confirm_password_err = "Please confirm password.";     
    } else{
        $confirm_password = trim($_POST["confirm_password"]);
        if(empty($password_err) && ($password != $confirm_password)){
            $confirm_password_err = "Password did not match.";
        }
    }
    
    // Validate email
    if(empty(trim($_POST["email"]))){
        $email_err = "Please enter a email.";
    }else{
        
        $emailToCheack = trim($_POST["email"]);
        
        $stmResult = $authManager->validEmail($emailToCheack);
            

        
                if($stmResult == 1){
                    $email_err = "This email is already taken.";
                } else{
                    $email = trim($_POST["email"]);
                }
            } 
    
    

    // Check input errors before inserting in database
    if(empty($firstname_err) && empty($lastname_err) && empty($password_err) && empty($confirm_password_err) && empty($email_err)){
        $user->setFirstname($firstname);
        $user->setLastname($lastname);
        $user->setPassword($password);
        $user->setEmail($email);
        $authManager->registerUser($user);
      
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
                                <div class="uk-margin"><input class="uk-input" type="firstname" placeholder="Firstname"<?php echo (!empty($firstname_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $firstname; ?>">
                                <?php echo $firstname_err; ?>
                                <div class="uk-margin"><input class="uk-input" type="lastname" placeholder="Lastname" <?php echo (!empty($lastname_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $lastname; ?>">
                                <?php echo $lastname_err; ?>
                                <div class="uk-margin"><input class="uk-input" type="email" placeholder="Email" <?php echo (!empty($email_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $email; ?>"></div>
                                <?php echo $email_err; ?>
                                <div class="uk-margin"><input class="uk-input" type="password" placeholder="Password" <?php echo (!empty($password_err)) ? 'is-invalid' : ''; ?>></div>
                                <?php echo $password_err; ?>
                                <div class="uk-margin"><input class="uk-input" type="confirm_password" placeholder="Confirm_password" <?php echo (!empty($confirm_password_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $confirm_password; ?>"></div>
                                <?php echo $confirm_password_err; ?>
                                <div class="uk-margin"><button class="uk-button uk-button-danger uk-width-1-1" type="button" href="login.php">Register</button></div>
                                <div class="uk-text-center"><span>Already have an account?</span><a class="uk-margin-small-left" href="login.php">Log In</a></div>
                                
                                
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

