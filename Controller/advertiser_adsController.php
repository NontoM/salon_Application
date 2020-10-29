<?php
require_once "../Model/db_config.php";

$company = $advertisr_email= $advertiser_phone = $advertiser_Co_location = $openHrs
 = $closingHrs = $inputAddress = $inputAddress2 = $inputCity = $inputState = $business_img = "";

 $company_err= $advertisr_email_err= $advertiser_phone_err = $advertiser_Co_location_err 
 = $openHrs_err = $closingHrs_err = $inputAddress_err = $inputAddress2_err = $inputCity_err = $inputState_err = $business_img_err= "";
 
if($_SERVER["REQUEST_METHOD"] == "POST"){

    if(empty(trim($_POST["company"]))){
        $company_err = "Please enter your Business Name.";
    } else{
        
        $sql = "SELECT id FROM advertiser_ads WHERE company = ?";
        
        if($stmt = $mysqli->prepare($sql)){
            $stmt->bind_param("s", $param_company);
            
            $param_company = trim($_POST["company"]);
            
            if($stmt->execute()){
                $stmt->store_result();
                
                if($stmt->num_rows == 1){
                    $company = "Name must not contain special characters.";
                } else{
                    $company = trim($_POST["company"]);
                }
            } 
        }
         
        // Close statement
        $stmt->close();
    }

    if(empty(trim($_POST["email"]))){
        $name_err = "Please enter your Email Address.";
    } else{
        
        $sql = "SELECT id FROM advertiser_ads WHERE email = ?";
        
        if($stmt = $mysqli->prepare($sql)){
            $stmt->bind_param("s", $param_email);
            
            $param_email = trim($_POST["email"]);
            
            if($stmt->execute()){
                $stmt->store_result();
                
                if($stmt->num_rows == 1){
                    $email_err = "email address not correct";
                } else{
                    $email = trim($_POST["email"]);
                }
            } 
        }
         
        // Close statement
        $stmt->close();
    }

    if(empty(trim($_POST["phone"]))){
        $name_err = "Please enter your Phone Number.";
    } else{
        
        $sql = "SELECT id FROM advertiser_ads WHERE phone = ?";
        
        if($stmt = $mysqli->prepare($sql)){
            $stmt->bind_param("s", $param_phone);
            
            $param_phone = trim($_POST["phone"]);
            
            if($stmt->execute()){
                $stmt->store_result();
                
                if($stmt->num_rows == 1){
                    $phone_err = "Phone Number cannot have more than 10 numbers.";
                } else{
                    $phone = trim($_POST["phone"]);
                }
            } 
        }
         
        // Close statement
        $stmt->close();
    }
 
    if(empty(trim($_POST["username"]))){
        $username_err = "Please enter a username.";
    } else{
        
        $sql = "SELECT id FROM advertiser_ads WHERE username = ?";
        
        if($stmt = $mysqli->prepare($sql)){
            $stmt->bind_param("s", $param_username);
            
            $param_username = trim($_POST["username"]);
            
            if($stmt->execute()){
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
    
    // Check input errors before inserting in database
    if(empty($username_err) && empty($password_err) && empty($confirm_password_err)){
        
        // Prepare an insert statement
        $sql = "INSERT INTO users (name, email, phone, username, password) VALUES (?, ?, ?, ?, ?)";
         
        if($stmt = $mysqli->prepare($sql)){
            // Bind variables to the prepared statement as parameters
            $stmt->bind_param("sssss",  $param_name, $param_email, $param_phone, $param_username, $param_password);
            
            // Set parameters
            $param_advertiser_Co_name = $advertiser_Co_name;
            $param_email = $email;
            $param_phone = $phone;
            $param_username = $username;
            $param_password = password_hash($password, PASSWORD_DEFAULT); // Creates a password hash
            
            if($stmt->execute()){

                echo "<div class='alert alert-success text-center'>
               <strong> Message!</strong> Business Profile has been created successfully Please wait...
               </div>".header("refresh:3 ../View/advertiser_list_ads.php");
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
 