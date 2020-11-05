<?php
// Include config file
require_once "../Controller/advertiserLogin_Controller.php";
?>
 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script><title>Log in</title>
    </head>
<body>

<div class="container p-4">
<div class="row">
    <div class="col-md-6 offset-md-3">
    <h4>PARTNER LOG IN</h4>
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
                <input type="submit" class="btn btn-primary btn-lg btn-block" value="Login" id="customer_submit">
            </div>
            <div>
            <p>Don't have a Partner Account? <a href="advertiser_register.php">Sign up now</a>.</p>
            </div>
        </form>   
    </div>
  </div>
</div>
<br>
<div class="container">
<div class="row">
    <div class="col-md-6 offset-md-3">
    <h4>BOOK A HAIRSTYLIST OR HAIR SALON?</h4>
    <p>This is the Partner Area, please go to <a href="customer_login.php"> Customer Login</a> to book.</p>
     </div>
</div>
</div>

</body>
</html>