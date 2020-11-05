<?php 
require_once "../Controller/advertiser_adsController.php";
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
<title>ADVERTISER ADS</title>
</head>
<body>
        <!-- Container start here-->
  <div class="container">
  <div class="row">
    <div class="col ">
    <div class="alert alert-success hide"></div>
    <!-- Form start here-->
    <form action="advertiser_list_ads.php"  method="post" name="list_Profile_form" id="list_Profile_form" enctype="multipart/form-data">
        <h3>LIST YOUR ONLINE PROFILE</h3>
        <h4>1. PROFILE DETAILS</h4>
        <div class="form-group">
                <label>Business Name</label>
                <input type="text" name="company" class="form-control" required>
            </div>    
            <div class="form-group ">
                <label>Email Address</label>
                <input type="email" name="emailAddress"  require="required"  class="form-control" required>
            </div>
            <div class="form-group ">
                <label>Phone Number</label>
                <input type="number" name="phoneNumber"  require="required"  class="form-control" required>
            </div>
            <div class="form-group">
           <label for="exampleFormControlTextarea1">Company Description</label>
            <textarea class="form-control" id="exampleFormControlTextarea1" name="description" rows="3"></textarea>
            </div>
            <div class="form-group">
                <label>Location Name</label>
                <input type="text" name="location" class="form-control" required>
            </div>  

      <div class="form-row">
    <div class="form-group col-md-6">
    <label for="tradingDays">OPENING DAYS</label>
      <select id="inputDays" name="tradingDays" class="form-control">
        <option selected>Monday</option>
        <option>Tuesday</option>
        <option>Wednesday</option>
        <option>Thursday</option>
        <option>Friday</option>
        <option>Saturday</option>
        <option>Sunday</option>
      </select> 
    </div>
    <div class="form-group col-md-4">
      <label for="Openhrs">OPENING HOURS</label>
      <input type="time" name="openHrs" class="form-control" required>
    </div>
    <div class="form-group col-md-2">
    <label for="closingHrs">CLOSING HOURS</label>
    <input type="time" name="closingHrs" class="form-control" required> </div>
  </div>
 
  <div class="form-group">
    <label for="businessAddress1">Business Address</label>
    <input type="text" class="form-control" id="inputAddress" name="address">
  </div>
  
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="City">City</label>
      <input type="text" name="city" class="form-control" id="inputCity">
    </div>
    <div class="form-group col-md-6">
      <label for="province">Province</label>
      <select id="inputState" name="province" class="form-control">
        <option selected>Choose...</option>
        <option>KZN</option>
        <option>GAUTENG</option>
      </select>
    </div>
    </div>
  
    <!--<div class="form-group">
    <label for="business_img">Upload Business Picture</label>
    <input type="file" name="business_img" id="fileToUpload">
      </div>-->
   


<input type="submit" class="btn btn-success btn-md" value="Submit" id="customer_Registersubmit">
        
    </form>
    <!--form ends here-->
  </div>
  </div>
        </div>
  <!-- Container ends here-->
   
       
    <!--footer ends here-->

            <!-- Container start here-->
  <!-- <div class="container">
  <div class="row">
    <div class="col-md-6 offset-md-3">
    <div class="alert alert-success hide"></div>
    <!-- Form start here-->
     <!--<form action="../View/advertiser_adsController.php"  method="post" name="list_Profile_form" id="list_Profile_form">
      <!-- First step start here-->
       <!--<fieldset>
        <h3>LIST YOUR ONLINE PROFILE</h3>
        <h4>1. PROFILE DETAILS</h4>
        <div class="form-group">
                <label>Business Name</label>
                <input type="text" name="company" class="form-control" required>
            </div>    
            <div class="form-group ">
                <label>Email Address</label>
                <input type="email" name="emailAddress"  require="required"  class="form-control" required>
            </div>
            <div class="form-group ">
                <label>Phone Number</label>
                <input type="number" name="phoneNumber"  require="required"  class="form-control" required>
            </div>
            <div class="form-group">
           <label for="exampleFormControlTextarea1">Company Description</label>
            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
            </div>
            <div class="form-group">
                <label>Location Name</label>
                <input type="text" name="location" class="form-control" required>
            </div>  
      
        <input type="button" name="password" class="next btn btn-info" value="Next" />
      </fieldset>
      <!-- First step ends here-->
      <!-- Second step start here-->
      <!-- <fieldset>
      <h4>2. TRADING HOURS</h4>

      <div class="form-row">
    <div class="form-group col-md-6">
    <label for="tradingDays">OPENING DAYS</label>
      <select id="inputDays" class="form-control">
        <option selected>Monday</option>
        <option>Tuesday</option>
        <option>Wednesday</option>
        <option>Thursday</option>
        <option>Friday</option>
        <option>Saturday</option>
        <option>Sunday</option>
      </select> 
    </div>
    <div class="form-group col-md-4">
      <label for="Openhrs">OPENING HOURS</label>
      <input type="time" name="openHrs" class="form-control" required>
    </div>
    <div class="form-group col-md-2">
    <label for="closingHrs">CLOSING HOURS</label>
    <input type="time" name="closingHrs" class="form-control" required> </div>
  </div>
  <input type="button" name="previous" class="previous btn btn-default" value="Previous" />
        <input type="button" name="next" class="next btn btn-info" value="Next" />
       
    </fieldset>
      <!-- Second step ends here-->
      <!-- Third step starts here-->
       <!--<fieldset>
      <h4>3. BUSINESS ADDRESS</h4>
  <div class="form-group">
    <label for="businessAddress1">Business Address</label>
    <input type="text" class="form-control" id="inputAddress" name="inputAddress" placeholder="1234 Main St">
  </div>
  <div class="form-group">
    <label for="businessAddress2">Address 2</label>
    <input type="text" class="form-control" id="inputAddress2"  name="$inputAddress2" placeholder="Apartment, studio, or floor">
  </div>
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="City">City</label>
      <input type="text" name="inputCity" class="form-control" id="inputCity">
    </div>
    <div class="form-group col-md-6">
      <label for="province">Province</label>
      <select id="inputState" class="form-control">
        <option selected>Choose...</option>
        <option>...</option>
      </select>
    </div>
    </div>
  
  <div class="form-group">
    <div class="form-check">
      <input class="form-check-input" type="checkbox" id="gridCheck">
      <label class="form-check-label" for="gridCheck">
        Check me out
      </label>
    </div>
  </div>
       <input type="button" name="previous" class="previous btn btn-default" value="Previous" />
        <input type="button" name="next" class="next btn btn-info" value="Next" />
       </fieldset>
      <!-- Third step ends here-->

     <!-- Fourth step starts here-->
      <!--<fieldset>
     <h4>4. UPLOAD BUSINESS PHOTO</h4>
     <div class="container">
	<div class="row">
		<input type='file' name="business-img" id="business_img" onchange="readURL(this);" />
	</div>
	<img id="blah" src="http://placehold.it/180" alt="your image" />
</div>
<input type="button" name="previous" class="previous btn btn-default" value="Previous" />
      <a href="advertiser_list_ads.php" class="submit btn btn-success" role="button" id="q7_next">Send</a>
    </fieldset>

     <!-- Fourth step ends here-->

     <!--</form>
    <!--form ends here-->
   <!--</div>
  </div>
        </div>
  <!-- Container ends here-->
  <!-- <br><br><br>
  <!--footer start here-->
  <!-- <div class="container">
  <div class="row">
    <div class="col-md-6 offset-md-3">
  <footer class="footer">
      <div class="progress">
          <div class="progress-bar progress-bar-danger active" role="progressbar" aria-valuemin="0" aria-valuemax="100">
          </div>
        </div>
    </footer>
    </div>
        </div>
        </div>
       
    <!--footer ends here-->
</body>
</html>












