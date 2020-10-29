<?php
// Include config file
require_once "../Controller/customerLogin_Controller.php";
?>
 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <title>Log in</title>
    </head>
    <style>
body{
  width: 100%;
  padding:0;
  margin:0;
}
form{
  width: 400px;
  font-family: arial;
  font-size:16px;
}
#wrapper{
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
        <h2>LOG IN</h2>
        <br>
        <p>Please fill in your credentials to login.</p>
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
        
        <div class="form-group <?php echo (!empty($username_err)) ? 'has-error' : ''; ?>">
            <label>Username</label>
            <input type="text" name="username" class="form-control" value="<?php echo $username; ?>">
            <span class="help-block"><?php echo $username_err; ?></span>
        </div>    
        <div class="form-group <?php echo (!empty($passcode_err)) ? 'has-error' : ''; ?>">
            <label>Password</label>
            <input type="password" name="passcode" class="form-control">
            <span class="help-block"><?php echo $passcode_err; ?></span>
        </div>
        <div>
            <p>Forgotten Password? <a href="reset_account.php">Reset Password</a>.</p>
            </div>
            
            <div class="form-group">
                <input type="submit" class="btn btn-primary btn-lg btn-block" value="Submit" id="customer_submit">
            </div>
            <div>
            <p>Don't have a Booker Account? <a href="customer_register.php">Sign up now</a>.</p>
            </div>   
        </form>   
    </div>  
    <div>
    <h1>Partner?</h1>
    <p>This is the Customer area, please go to <a href="advertiser_login.php"> Partner log in</a> instead</p>
    </div> 
<br><br>
  
</body>
</html>