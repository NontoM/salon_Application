<?php
// Include config file
require_once "../Controller/customerLogin_Controller.php";
require_once "../Controller/customer_RegisterController.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="//use.fontawesome.com/releases/v5.0.7/css/all.css">
    <title>Document</title>
    <style>
    #home_i{
    margin-left:82px;
    }
    </style>
</head>
<body>
<div class="container mt-4 p-2">
<div class="float-md-right"><a class="btn btn-danger"  id="mainBusinessReg_btn" href="advertiser.php" role="button">Business Registration</a>
</div><br><br>
</div>

    <div class="container p-2">
    <div class="row justify-content-around">
    <div class="col-md-4">
        <h5>LOG IN</h5>
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
                <input type="submit" class="btn btn-primary btn-md " value="Login" id="customer_submit">
            </div>
        </form>   
    </div>  
    
    <div class="col-md-4">
        <h5>SIGN UP TO BOOK</h5>
        <br>
        <p>Please fill this form to create an account.</p>
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
            <div class="form-group <?php echo (!empty($username_err)) ? 'has-error' : ''; ?>">
                <label>Username</label>
                <input type="text" name="username" class="form-control" value="<?php echo $username; ?>">
                <span class="help-block"><?php echo $username_err; ?></span>
            </div>    
            <div class="form-group <?php echo (!empty($passcode_err)) ? 'has-error' : ''; ?>">
                <label>Password</label>
                <input type="password" name="passcode" class="form-control" value="<?php echo $passcode; ?>">
                <span class="help-block"><?php echo $passcode_err; ?></span>
            </div>
            <div class="form-group <?php echo (!empty($confirm_passcode_err)) ? 'has-error' : ''; ?>">
                <label>Confirm Password</label>
                <input type="password" name="confirm_passcode" class="form-control" value="<?php echo $confirm_passcode; ?>">
                <span class="help-block"><?php echo $confirm_passcode_err; ?></span>
            </div>
            <div class="form-check form-check-inline">
            <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1" required>
           <label class="form-check-label" for="inlineCheckbox1" id="terms">I accept <a href="">privacy policy</a>
         , <a href="">terms and conditions</a></label>
          </div>
          <br>
            <div class="form-group">
                <input type="submit" class="btn btn-success btn-md" value="Register" id="customer_Registersubmit">
             </div>
        </form>   
    </div>
    </div>
    </div>

    <div class="container">
    <i class="fas fa-home"id="home_i"><a href="../index01.php">Back to home page</a></i>
    </div>

   
</body>
</html>