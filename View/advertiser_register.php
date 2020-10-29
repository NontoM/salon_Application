<?php
// Include config file
require_once "../Controller/advertiser_RegisterController.php";
?>
 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
    <title>Partner Sign Up</title>
    </head>
<style>
body{
  width: 100%;
  padding:0;
  margin:0;
}
form{
  width: 500px;
  font-family: arial;
  font-size:16px;
}
#wrapper{
margin-left:450px;
margin-top:60px;
width: 600px;
padding-top:24px;
padding-bottom:20px;
padding-left:45px;
font-family: arial;
font-size:16px;
-moz-box-shadow:    3px 3px 5px 6px #ccc;
-webkit-box-shadow: 3px 3px 5px 6px #ccc;
box-shadow:         3px 3px 5px 6px #ccc;
}
#customer_submit{
font-family: arial;
font-size:16px;
}
h2{
font-family: arial;
font-size:18px; 
font-weight:bolder;
}
#terms{
font-family: arial;
font-size:12px; 
font-weight:400;
}
input{
font-family: arial;
font-size:18px; 
 
}
span{
    color:red;
}
.log_opt{
margin-left:450px;
margin-top:60px;
width: 500px;
padding-top:24px;
padding-bottom:20px;
padding-left:45px;
font-family: arial;
font-size:16px;
-moz-box-shadow:    3px 3px 5px 6px #ccc;
-webkit-box-shadow: 3px 3px 5px 6px #ccc;
box-shadow:         3px 3px 5px 6px #ccc; 
}

</style>
<body>

    <div class="container col-md-12 col-sm-12" id="wrapper">
        <h2>SIGN UP TO PARTNER</h2>
        <br>
        <p>Please fill this form to create an account.</p>
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
        <div class="form-row">
        <div class="form-group col-md-6 <?php echo (!empty($firstname_err)) ? 'has-error' : ''; ?>">
                <label>Firstname</label>
                <input type="text" name="firstname" class="form-control" value="<?php echo $firstname; ?>">
                <span class="help-block"><?php echo $firstname_err; ?></span>
            </div>  
            <div class="form-group col-md-6 <?php echo (!empty($lastname_err)) ? 'has-error' : ''; ?>">
                <label>Lastname</label>
                <input type="text" name="lastname" class="form-control" value="<?php echo $lastname; ?>">
                <span class="help-block"><?php echo $lastname_err; ?></span>
            </div> 
            </div> 
            <div class="form-row">
            <div class="form-group col-md-6 <?php echo (!empty($email_err)) ? 'has-error' : ''; ?>">
                <label>Email Address</label>
                <input type="email" name="email" class="form-control" value="<?php echo $email; ?>">
                <span class="help-block"><?php echo $email_err; ?></span>
            </div>  
            <div class="form-group col-md-6 <?php echo (!empty($company_name_err)) ? 'has-error' : ''; ?>">
                <label>Company Name</label>
                <input type="text" name="company_name" class="form-control" value="<?php echo $company_name; ?>">
                <span class="help-block"><?php echo $company_name_err; ?></span>
            </div> 
            </div>  
            <div class="form-row">
            <div class="form-group col-md-6 <?php echo (!empty($business_type_err)) ? 'has-error' : ''; ?>">
            <label for="exampleFormControlSelect1">Business Type</label>
            <select class="form-control" id="exampleFormControlSelect1" name="business_type" required>  
             <option>Select Business Type</option>
             <option>Hair Salon</option>
             <option>Hair Stylist</option>
            </select>
            <span class="help-block"><?php echo $business_type_err; ?></span>
            </div>
            <div class="form-group col-md-6 <?php echo (!empty($username_err)) ? 'has-error' : ''; ?>">
                <label>Username</label>
                <input type="text" name="username" class="form-control" value="<?php echo $username; ?>">
                <span class="help-block"><?php echo $username_err; ?></span>
            </div>  
            </div>  
            <div class="form-row"> 
            <div class="form-group col-md-6 <?php echo (!empty($passcode_err)) ? 'has-error' : ''; ?>">
                <label>Password</label>
                <input type="password" name="passcode" class="form-control" value="<?php echo $passcode; ?>">
                <span class="help-block"><?php echo $passcode_err; ?></span>
            </div>
            <div class="form-group col-md-6 <?php echo (!empty($confirm_passcode_err)) ? 'has-error' : ''; ?>">
                <label>Confirm Password</label>
                <input type="password" name="confirm_passcode" class="form-control" value="<?php echo $confirm_passcode; ?>">
                <span class="help-block"><?php echo $confirm_passcode_err; ?></span>
            </div>
            </div> 
            
            <div class="form-check form-check-inline">
            <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1" required>
           <label class="form-check-label" for="inlineCheckbox1" id="terms">I agree to the <a href="">privacy policy</a>
           , <a href="">website terms</a> and <a href="">booking terms</a></label>
          </div>
          <br>
            <div class="form-group">
                <input type="submit" class="btn btn-primary btn-lg btn-block" value="Submit" id="customer_submit">
            </div>
            <div>
            <p>Already have a Partner Account? <a href="advertiser_login.php">Login here</a>.</p>
            </div>
        </form>   
    </div>  
    <div class="log_opt">
    <h1>Booking as a Customer?</h1>
    <p>This is the Partner area, please go to <a href="customer_login.php"> Customer log in</a> instead</p>
    </div> 
<br><br>
</body>
</html>