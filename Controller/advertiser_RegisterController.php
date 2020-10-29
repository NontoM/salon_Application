<?php
// Include config file
require_once "../Model/db_config.php";
 
// Define variables and initialize with empty values
$firstname = $lastname = $email = $company_name = $business_type = $username = $passcode = $confirm_passcode = "";
$firstname_err = $lastname_err = $email_err = $company_name_err = $business_type_err = $username_err = $passcode_err = $confirm_passcode_err = "";
 
// Processing form data when form is submitted
if($_SERVER["REQUEST_METHOD"] == "POST"){

      // Validate firsname
      if(empty(trim($_POST["firstname"]))){
        $firstname_err = "Please enter your firstname.";
    } else{
        // Prepare a select statement
        $sql = "SELECT id FROM advertiser WHERE firstname = ?";
        
        if($stmt = $mysqli->prepare($sql)){
            // Bind variables to the prepared statement as parameters
            $stmt->bind_param("s", $param_firstname);
            
            // Set parameters
            $param_firstname = trim($_POST["firstname"]);
            
            // Attempt to execute the prepared statement
            if($stmt->execute()){
                // store result
                $stmt->store_result();
                
                if($stmt->num_rows == 1){
                    $firstname_err = "First name should not include special characters.";
                } else{
                    $firstname = trim($_POST["firstname"]);
                }
            } else{
                echo "Oops! Something went wrong. Please try again later.";
            }
        }
         
        // Close statement
        $stmt->close();
    }
      // Validate lastname
      if(empty(trim($_POST["lastname"]))){
        $lastname_err = "Please enter your lastname.";
    } else{
        // Prepare a select statement
        $sql = "SELECT id FROM advertiser WHERE lastname = ?";
        
        if($stmt = $mysqli->prepare($sql)){
            // Bind variables to the prepared statement as parameters
            $stmt->bind_param("s", $param_lastname);
            
            // Set parameters
            $param_lastname = trim($_POST["lastname"]);
            
            // Attempt to execute the prepared statement
            if($stmt->execute()){
                // store result
                $stmt->store_result();
                
                if($stmt->num_rows == 1){
                    $lastname_err = "Lastname should not include special characters.";
                } else{
                    $lastname = trim($_POST["lastname"]);
                }
            } else{
                echo "Oops! Something went wrong. Please try again later.";
            }
        }
         
        // Close statement
        $stmt->close();
    }
      // Validate email
      if(empty(trim($_POST["email"]))){
        $email_err = "Please enter your business email address.";
    } else{
        // Prepare a select statement
        $sql = "SELECT id FROM advertiser WHERE email = ?";
        
        if($stmt = $mysqli->prepare($sql)){
            // Bind variables to the prepared statement as parameters
            $stmt->bind_param("s", $param_email);
            
            // Set parameters
            $param_email = trim($_POST["email"]);
            
            // Attempt to execute the prepared statement
            if($stmt->execute()){
                // store result
                $stmt->store_result();
                
                if($stmt->num_rows == 1){
                    $email_err = "Please enter the correct email address.";
                } else{
                    $email = trim($_POST["email"]);
                }
            } else{
                echo "Oops! Something went wrong. Please try again later.";
            }
        }
         
        // Close statement
        $stmt->close();
    }
      // Validate company name
      if(empty(trim($_POST["company_name"]))){
        $company_name_err = "Please enter your company name.";
    } else{
        // Prepare a select statement
        $sql = "SELECT id FROM advertiser WHERE company_name = ?";
        
        if($stmt = $mysqli->prepare($sql)){
            // Bind variables to the prepared statement as parameters
            $stmt->bind_param("s", $param_company_name);
            
            // Set parameters
            $param_company_name = trim($_POST["company_name"]);
            
            // Attempt to execute the prepared statement
            if($stmt->execute()){
                // store result
                $stmt->store_result();
                
                if($stmt->num_rows == 1){
                    $company_name_err = "Please enter the correct company name.";
                } else{
                    $company_name = trim($_POST["company_name"]);
                }
            } else{
                echo "Oops! Something went wrong. Please try again later.";
            }
        }
         
        // Close statement
        $stmt->close();
    }
      // Validate business type
      if(empty(trim($_POST["username"]))){
        $business_type_err = "Please select business type.";
    } else{
        // Prepare a select statement
        $sql = "SELECT id FROM advertiser WHERE business_type = ?";
        
        if($stmt = $mysqli->prepare($sql)){
            // Bind variables to the prepared statement as parameters
            $stmt->bind_param("s", $param_business_type);
            
            // Set parameters
            $param_business_type = trim($_POST["business_type"]);
            
            // Attempt to execute the prepared statement
            if($stmt->execute()){
                // store result
                $stmt->store_result();
                
                if($stmt->num_rows == 1){
                    $business_type_err = "Please select business type.";
                } else{
                    $business_type = trim($_POST["business_type"]);
                }
            } else{
                echo "Oops! Something went wrong. Please try again later.";
            }
        }
         
        // Close statement
        $stmt->close();
    }
 
    // Validate username
    if(empty(trim($_POST["username"]))){
        $username_err = "Please enter a username.";
    } else{
        // Prepare a select statement
        $sql = "SELECT id FROM advertiser WHERE username = ?";
        
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
        $sql = "INSERT INTO advertiser (firstname, lastname, email, company_name, business_type, username, passcode) VALUES (?, ?, ?, ?,?, ?,?)";
         
        if($stmt = $mysqli->prepare($sql)){
            // Bind variables to the prepared statement as parameters
            $stmt->bind_param("sssssss", $param_firstname, $param_lastname,$param_email, $param_company_name,$param_business_type,$param_username, $param_passcode);
            
            // Set parameters
            $param_firstname = $firstname;
            $param_lastname = $lastname;
            $param_email = $email;
            $param_company_name = $company_name;
            $param_business_type = $business_type;
            $param_username = $username;
            $param_passcode = password_hash($passcode, PASSWORD_DEFAULT); // Creates a password hash
            
            // Attempt to execute the prepared statement
            if($stmt->execute()){
                // Redirect to login page
                echo "<div class='alert alert-success text-center'>
                <strong> Message!</strong> Account has been created successfully Please wait...
                </div>".header("refresh:3 advertiser_login.php");
            } else{
                echo "Something went wrong. Please try again.";
            }
        }
         
        // Close statement
        $stmt->close();
    }
    
    // Close connection
    $mysqli->close();
}
?>