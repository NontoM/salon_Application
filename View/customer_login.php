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
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
     <title>Log in</title>
    </head>
<body>

<div class="container p-4">
<div class="row">
    <div class="col-md-6 offset-md-3">
    <h4>LOG IN</h4>
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
            <p>Don't have a Booker Account? <a href="customer_register.php">Sign up now</a>.</p>
            </div>   
        </form>   
    </div>
  </div>
</div>
<br>
<div class="container">
<div class="row">
    <div class="col-md-6 offset-md-3">
    <h4>LOGIN AS PARTNER?</h4>
    <p>This is the Customer area, please go to <a href="advertiser_login.php"> Partner Login</a> instead.</p>
 </div>
</div>
</div>

</body>
</html>