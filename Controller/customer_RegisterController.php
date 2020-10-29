<?php
// Include config file
require_once "../Model/db_config.php";
 
// Define variables and initialize with empty values
$username = $passcode = $confirm_passcode = "";
$username_err = $passcode_err = $confirm_passcode_err = "";
 
// Processing form data when form is submitted
if($_SERVER["REQUEST_METHOD"] == "POST"){
 
    // Validate username
    if(empty(trim($_POST["username"]))){
        $username_err = "Please enter a username.";
    } else{
        // Prepare a select statement
        $sql = "SELECT id FROM customers WHERE username = ?";
        
        if($stmt = $mysqli->prepare($sql)){
            // Bind variables to the prepared statement as parameters
            $stmt->bind_param("s", $param_username);
            
            // Set parameters
            $param_username = trim($_POST["username"]);
            
            // Attempt to execute the prepared statement
            if($stmt->execute()){
                // store result
                $stmt->store_result();
                
                if($stmt->num_rows == 1){
                    $username_err = "This username is already taken.";
                } else{
                    $username = trim($_POST["username"]);
                }
            } else{
                echo "Oops! Something went wrong. Please try again later.";
            }
        }
         
        // Close statement
        $stmt->close();
    }
    
    // Validate password
    if(empty(trim($_POST["passcode"]))){
        $passcode_err = "Please enter a password.";     
    } elseif(strlen(trim($_POST["passcode"])) < 6){
        $passcode_err = "Password must have atleast 6 characters.";
    } else{
        $passcode = trim($_POST["passcode"]);
    }
    
    // Validate confirm password
    if(empty(trim($_POST["confirm_passcode"]))){
        $confirm_passcode_err = "Please confirm password.";     
    } else{
        $confirm_passcode = trim($_POST["confirm_passcode"]);
        if(empty($passcode_err) && ($passcode != $confirm_passcode)){
            $confirm_passcode_err = "Password did not match.";
        }
    }
    
    // Check input errors before inserting in database
    if(empty($username_err) && empty($passcode_err) && empty($confirm_passcode_err)){
        
        // Prepare an insert statement
        $sql = "INSERT INTO customers (username, passcode) VALUES (?, ?)";
         
        if($stmt = $mysqli->prepare($sql)){
            // Bind variables to the prepared statement as parameters
            $stmt->bind_param("ss", $param_username, $param_passcode);
            
            // Set parameters
            $param_username = $username;
            $param_passcode = password_hash($passcode, PASSWORD_DEFAULT); // Creates a password hash
            
            // Attempt to execute the prepared statement
            if($stmt->execute()){
                // Redirect to login page
                echo "<div class='alert alert-success text-center'>
                <strong> Message!</strong> Account has been created successfully Please wait...
                </div>".header("refresh:3 customer_login.php");
            } else{
                echo "Something went wrong. Please try again later.";
            }
        }
         
        // Close statement
        $stmt->close();
    }
    
    // Close connection
    $mysqli->close();
}
?>