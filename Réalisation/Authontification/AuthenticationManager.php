<?php
 include 'User.php';

class AuthenticationManager{
   



    private $Connection = Null;

    private function getConnection(){
      
        $this->Connection = mysqli_connect('localhost', 'root', '', 'hotels'); 
        return $this->Connection;
        
    }
   
    
    
 function registerUser($user){

    // Prepare an insert statement
    $sql = "INSERT INTO users (firstName, lastName, passWord, email) VALUES (?, ?, ?, ?)";
         
    if($stmt = $this->getConnection()->prepare($sql)){
        // Bind variables to the prepared statement as parameters
        $stmt->bind_param("sssss", $param_firstname, $param_lastname, $param_password, $param_email, $param_role);
        
        // Set parameters
        $param_firstname = $user->getFirstname();
        $param_lastname = $user->getLastname();
        $param_password = password_hash($user->getPassword(), PASSWORD_DEFAULT); // Creates a password hash
        $param_email = $user->getEmail();
        
        
        // Attempt to execute the prepared statement
        if($stmt->execute()){
            // Redirect to login page
            header("location: login.php");
        } else{
            echo "Oops! Something went wrong. Please try again later.";
        }

        // Close statement
        $stmt->close();

        
    }
     // Close connection
     $this->getConnection()->close();
}



// Validate email
function validEmail($email){
     // Prepare a select statement
     $sql = "SELECT id FROM users WHERE email = ?";
        
     if($stmt = mysqli_prepare($this->getConnection(), $sql)){
         // Bind variables to the prepared statement as parameters
         mysqli_stmt_bind_param($stmt, "s", $param_email);
         
         // Set parameters
         $param_email = $email;
         
         // Attempt to execute the prepared statement
         if(mysqli_stmt_execute($stmt)){
             /* store result */
             mysqli_stmt_store_result($stmt);
             return mysqli_stmt_num_rows($stmt);
             mysqli_stmt_close($stmt);
        }
    }
}
function Login( $password,$email){

    // Prepare a select statement
    $sql = "SELECT id, email, passWord FROM users WHERE email = ?";
        
    if($stmt = mysqli_prepare($this->getConnection(), $sql)){
        // Bind variables to the prepared statement as parameters
        mysqli_stmt_bind_param($stmt, "s", $param_email);
        
        // Set parameters
        $param_email = $email;
        
        // Attempt to execute the prepared statement
        if(mysqli_stmt_execute($stmt)){
            // Store result
            mysqli_stmt_store_result($stmt);
            
            // Check if email exists, if yes then verify password
            if(mysqli_stmt_num_rows($stmt) == 1){                    
                // Bind result variables
                mysqli_stmt_bind_result($stmt, $id, $email, $hashed_password);
                if(mysqli_stmt_fetch($stmt)){
                    if(password_verify($password, $hashed_password)){
                           // Password is correct, so start a new session
                           session_start();
                            
                           // Store data in session variables
                           $_SESSION["loggedin"] = true;
                           $_SESSION["id"] = $id;
                           $_SESSION["email"] = $email;  
                           return true;
                    } else {
                        return false;
                    }
                    
                }
            } else {
                return false;
            }
            // Close statement
        mysqli_stmt_close($stmt);
        }
        
        
    
    
        // Close connection
        mysqli_close($this->getConnection());
    }
    
}


function MyAccount($email){

    // Prepare an insert statement
    $SelctRow = "SELECT * From users where email  = '$email'";
    $query = mysqli_query($this->getConnection() ,$SelctRow);
    $produits_data = mysqli_fetch_all($query, MYSQLI_ASSOC);
    $TableData = array();
    foreach ( $produits_data as $value_Data) {
                         
        $user  = new User();
         $user->setId($value_Data['id']);
         $user->setFirstname($value_Data['firstName']);
         $user->setLastname($value_Data['lastName']);
        $user->setEmail($value_Data['email']);
        $user->setPassword($value_Data['passWord']);
        array_push($TableData, $user);
    }
    return $TableData;
    }

function EditMyAccount($firstName,$lastName,$id){

    // Prepare an insert statement
    $SelctRow = "UPDATE users SET  firstName ='$firstName',lastName ='$lastName' where id = '$id' ";
   
     mysqli_query($this->getConnection() ,$SelctRow);
    }


}