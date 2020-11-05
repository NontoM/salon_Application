<?php
require_once "../Model/db_config.php";

$company = $emailAdress= $phoneNumber  = $description = $location = $tradingDays = $openHrs
 = $closingHrs = $address  = $city = $province ="";

 $company_err= $emailAdress_err = $phoneNumber_err = $description_err = $location_err 
 = $tradingDays_err = $openHrs_err = $closingHrs_err = $address_err = $city_err = $province_err = "";
 
if($_SERVER["REQUEST_METHOD"] == "POST"){

    if(empty(trim($_POST["company"]))){
        $company_err = "Please enter your Business Name.";
    } else{
        
        $sql = "SELECT adsid FROM advertisers_ads WHERE company = ?";
        
        if($stmt = $mysqli->prepare($sql)){
            $stmt->bind_param("s", $param_company);
            
            $param_company = trim($_POST["company"]);
            
            if($stmt->execute()){
                $stmt->store_result();
                
                if($stmt->num_rows == 1){
                    $company = "Please enter correct company name.";
                } else{
                    $company = trim($_POST["company"]);
                }
            } 
        }
         
        // Close statement
        $stmt->close();
    }

    if(empty(trim($_POST["emailAddress"]))){
        $name_err = "Please enter your Email Address.";
    } else{
        
        $sql = "SELECT adsid FROM advertisers_ads WHERE emailAddress = ?";
        
        if($stmt = $mysqli->prepare($sql)){
            $stmt->bind_param("s", $param_emailAddress);
            
            $param_emailAddress = trim($_POST["emailAddress"]);
            
            if($stmt->execute()){
                $stmt->store_result();
                
                if($stmt->num_rows == 1){
                    $emailAddress_err = "email address not correct";
                } else{
                    $emailAddress = trim($_POST["emailAddress"]);
                }
            } 
        }
         
        // Close statement
        $stmt->close();
    }

    if(empty(trim($_POST["phoneNumber"]))){
        $phoneNumber_err = "Please enter your Phone Number.";
    } else{
        
        $sql = "SELECT adsid FROM advertisers_ads WHERE phoneNumber = ?";
        
        if($stmt = $mysqli->prepare($sql)){
            $stmt->bind_param("s", $param_phoneNumber);
            
            $param_phoneNumber = trim($_POST["phoneNumber"]);
            
            if($stmt->execute()){
                $stmt->store_result();
                
                if($stmt->num_rows == 1){
                    $phoneNumber_err = "Phone Number cannot have more than 10 numbers.";
                } else{
                    $phoneNumber = trim($_POST["phoneNumber"]);
                }
            } 
        }
         
        // Close statement
        $stmt->close();
    }
 
    if(empty(trim($_POST["description"]))){
        $description_err = "Please enter your company description.";
    } else{
        
        $sql = "SELECT adsid FROM advertisers_ads WHERE description = ?";
        
        if($stmt = $mysqli->prepare($sql)){
            $stmt->bind_param("s", $param_description);
            
            $param_description = trim($_POST["description"]);
            
            if($stmt->execute()){
                $stmt->store_result();
                
                if($stmt->num_rows == 1){
                    $description_err = "Description must not be more that 80 characters.";
                } else{
                    $description = trim($_POST["description"]);
                }
            } else{
                echo "Oops! Something went wrong. Please try again later.";
            }
        }
         
        // Close statement
        $stmt->close();
    }
     
    if(empty(trim($_POST["location"]))){
        $location_err = "Please enter your Business Location.";
    } else{
        
        $sql = "SELECT adsid FROM advertisers_ads WHERE location = ?";
        
        if($stmt = $mysqli->prepare($sql)){
            $stmt->bind_param("s", $param_location);
            
            $param_location = trim($_POST["location"]);
            
            if($stmt->execute()){
                $stmt->store_result();
                
                if($stmt->num_rows == 1){
                    $location = "Please enter correct location.";
                } else{
                    $location = trim($_POST["location"]);
                }
            } 
        }
         
        // Close statement
        $stmt->close();
    }

    if(empty(trim($_POST["tradingDays"]))){
        $tradingDays_err = "Please select your trading days.";
    } else{
        
        $sql = "SELECT adsid FROM advertisers_ads WHERE tradingDays = ?";
        
        if($stmt = $mysqli->prepare($sql)){
            $stmt->bind_param("s", $param_tradingDays);
            
            $param_tradingDays = trim($_POST["tradingDays"]);
            
            if($stmt->execute()){
                $stmt->store_result();
                
                if($stmt->num_rows == 1){
                    $tradingDays_err = "Please select your trading days";
                } else{
                    $tradingDays = trim($_POST["tradingDays"]);
                }
            } 
        }
         
        // Close statement
        $stmt->close();
    }

    if(empty(trim($_POST["openHrs"]))){
        $openHrs_err = "Please enter opening hours.";
    } else{
        
        $sql = "SELECT adsid FROM advertisers_ads WHERE openHrs = ?";
        
        if($stmt = $mysqli->prepare($sql)){
            $stmt->bind_param("s", $param_openHrs);
            
            $param_openHrs = trim($_POST["openHrs"]);
            
            if($stmt->execute()){
                $stmt->store_result();
                
                if($stmt->num_rows == 1){
                    $openHrs_err = "Please enter opening hours.";
                } else{
                    $openHrs = trim($_POST["openHrs"]);
                }
            } 
        }
         
        // Close statement
        $stmt->close();
    }
 
    if(empty(trim($_POST["closingHrs"]))){
        $closingHrs_err = "Please enter closing hours";
    } else{
        
        $sql = "SELECT adsid FROM advertisers_ads WHERE closingHrs = ?";
        
        if($stmt = $mysqli->prepare($sql)){
            $stmt->bind_param("s", $param_closingHrs);
            
            $param_closingHrs = trim($_POST["closingHrs"]);
            
            if($stmt->execute()){
                $stmt->store_result();
                
                if($stmt->num_rows == 1){
                    $closingHrs_err ="Please enter closing hours";
                } else{
                    $closingHrs = trim($_POST["closingHrs"]);
                }
            } else{
                echo "Oops! Something went wrong. Please try again later.";
            }
        }
         
        // Close statement
        $stmt->close();
    }

    if(empty(trim($_POST["address"]))){
        $address_err = "Please enter business address.";
    } else{
        
        $sql = "SELECT adsid FROM advertisers_ads WHERE address = ?";
        
        if($stmt = $mysqli->prepare($sql)){
            $stmt->bind_param("s", $param_address);
            
            $param_address = trim($_POST["address"]);
            
            if($stmt->execute()){
                $stmt->store_result();
                
                if($stmt->num_rows == 1){
                    $address_err =  "Please enter correct business address.";
                } else{
                    $address = trim($_POST["address"]);
                }
            } 
        }
         
        // Close statement
        $stmt->close();
    }
 
    if(empty(trim($_POST["city"]))){
        $city_err = "Please enter your city.";
    } else{
        
        $sql = "SELECT adsid FROM advertisers_ads WHERE city = ?";
        
        if($stmt = $mysqli->prepare($sql)){
            $stmt->bind_param("s", $param_city);
            
            $param_city = trim($_POST["city"]);
            
            if($stmt->execute()){
                $stmt->store_result();
                
                if($stmt->num_rows == 1){
                    $city_err = "Please enter your city.";
                } else{
                    $city = trim($_POST["city"]);
                }
            } else{
                echo "Oops! Something went wrong. Please try again later.";
            }
        }
         
        // Close statement
        $stmt->close();
    }

    if(empty(trim($_POST["province"]))){
        $province_err = "Please enter your province.";
    } else{
        
        $sql = "SELECT adsid FROM advertisers_ads WHERE province = ?";
        
        if($stmt = $mysqli->prepare($sql)){
            $stmt->bind_param("s", $param_province);
            
            $param_province = trim($_POST["province"]);
            
            if($stmt->execute()){
                $stmt->store_result();
                
                if($stmt->num_rows == 1){
                    $province_err =  "Please enter correct province.";
                } else{
                    $province = trim($_POST["province"]);
                }
            } 
        }
         
        // Close statement
        $stmt->close();
    }     
 
    // Check input errors before inserting in database
    $company_err = $emailAdress_err = $phoneNumber_err = $description_err = $location_err 
    = $tradingDays_err = $openHrs_err = $closingHrs_err = $address_err = $city_err = $province_err = "";
 
    if(empty($company_err) && empty($emailAdress_err) && empty( $phoneNumber_err) && empty( $description_err)
     && empty ($tradingDays_err) && empty($openHrs_err) && empty( $closingHrs_err)
     && empty ($address_err) && empty($city_err) && empty( $province_err)){
        
        // Prepare an insert statement
        $sql = "INSERT INTO advertisers_ads (company, emailAdress, phoneNumber, 
         description, location, tradingDays, openHrs, closingHrs, address, city,province) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?,?,?)";
         
        if($stmt = $mysqli->prepare($sql)){
            // Bind variables to the prepared statement as parameters
            $stmt->bind_param("sssssssssss",  $param_company, $param_emailAddress, $param_phoneNumber, $param_description,
            $param_location, $param_tradingDays,$param_openHrs,  $param_closingHrs,$param_adress,
            $param_city, $param_province);
            
            // Set parameters
            $param_company = $company;
            $param_emailAddress = $emailAdress;
            $param_phoneNumber = $phoneNumber;
            $param_description = $description;
            $param_location = $location;
            $param_tradingDays = $tradingDays;
            $param_openHrs = $openHrs;
            $param_closingHrs = $closingHrs;
            $param_adress = $address;
            $param_city = $city;
            $param_province = $province;
      
           
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
 