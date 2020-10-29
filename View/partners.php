<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <!-- CDN for Font Awesome Icons -->
    <link rel="stylesheet" type="text/css" href="https://use.fontawesome.com/releases/v5.10.2/css/all.css">
    <title>YIYO</title>
	<style>
	body{
		width:100%;
		padding: 0px;
		margin:0px;
	}
	nav{
    background-color: #36a1d4;
	}
	.nav-link{
		color:#ffffff;
		padding:10px;
	}
	.wrap{
    background-color: #36a1d4;
	}

	#img2{
     width:100%;
     background-position: center;
     background-repeat:no-repeat;
     background-size: cover;
	  	background-color: #36a1d4;
   
 }

 #img3{
     width:100%;
     height:250px;
     background-position: center;
     background-repeat:no-repeat;
     background-size: cover;
	   background-color: #36a1d4;
     margin-top:100px;
   
 }
 #instant{
  padding-top:100px;
  padding-bottom:20px;
  font-size:48px;
  font-weight: 400;
  font-family: sans-serif; 
  /*background-image: url('View/images/star.png');*/

}
form.example input[type=text] {
  padding: 10px;
  font-size: 17px;
  border: 1px solid grey;
  float: left;
  width: 40%;
  background: #f1f1f1;
}

/* Style the submit button */
form.example button {
  float: left;
  width: 10%;
  padding: 10px;
  background: #2196F3;
  color: white;
  font-size: 17px;
  border: 1px solid grey;
  border-left: none; /* Prevent double borders */
  cursor: pointer;
}

form.example button:hover {
  background: #0b7dda;
}

/* Clear floats */
form.example::after {
  content: "";
  clear: both;
  display: table;
}
	</style>
</head>
<body>
   <!--Navbar-->
<nav class="navbar navbar-dark navbar-3  sticky-top">

<!-- Navbar brand -->
<a class="navbar-brand" href="#"><img src="../View/images/logo2.png" alt="logo"></a>
    <a class="nav-link" href="#">Partners</a>
	  <a class="nav-link" href="../View/advertiser_register.php">Sign up</a>
	  <a class="nav-link" href="../View/advertiser_login.php">Log in</a>
      
<!-- Collapse button -->
<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent15"
  aria-controls="navbarSupportedContent15" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>

<!-- Collapsible content -->
<div class="collapse navbar-collapse" id="navbarSupportedContent15">

  <!-- Links -->
  <ul class="navbar-nav mr-auto">
    <li class="nav-item active">
      <a class="nav-link" href="../index01.php">Home <span class="sr-only">(current)</span></a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="#">Customer Support</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="#">Pricing</a>
    </li>
  </ul>
  <!-- Links -->
</div>

<!-- Collapsible content -->
</nav>
<!--/.Navbar--> 
<section class="wrap text-white">
<div class="container">
<div class="row">
<div class="col-md-6 col-sm-12">
<h2 id="instant">Software for Salons and Hairstylists</h2>
<h3>Simple, flexible and powerful booking software for your business.</h3>
<button type="button" class="btn btn-secondary btn-lg">SIGN UP NOW</button>
</div>
<div class="col-md-2 col-sm-12" id="instant3"><img src="../View/images/partner_Cal.png" alt="" id="img3">
 </div>
<div class="col-md-4 col-sm-12" id="instant2"><img src="../View/images/mainP-img.png" alt="" id="img2" height="450"></div>
 </div>
</div>
</section>



<footer>
<p> YIYO © 2020 / All Rights Reserved</p>
</footer>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
 

</body>
</html>


