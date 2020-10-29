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
		background-color:#d281b5;
	}
	.nav-link{
		color:#ffffff;
		padding:10px;
	}
	.wrap{
		background-color:#d281b5;	
	}

	#img1{
     width:450px;
     background-position: center;
     background-repeat:no-repeat;
     background-size: cover;
	 background-color:#d281b5;
   
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
      <a class="navbar-brand" href="#"><img src="View/images/logo2.png" alt="logo"></a>
      <a class="nav-link" href="View/partners.php">Partners</a>
	  <a class="nav-link" href="View/customer_register.php">Sign up</a>
	  <a class="nav-link" href="View/customer_login.php">Log in</a>
      
<!-- Collapse button -->
<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent15"
  aria-controls="navbarSupportedContent15" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>

<!-- Collapsible content -->
<div class="collapse navbar-collapse" id="navbarSupportedContent15">

  <!-- Links -->
  <ul class="navbar-nav mr-auto">
    <li class="nav-item active">
      <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
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
<h2 id="instant">Instantly Book  <br>Hairstylists
And Salons  <br> Nearby</h2>
<form class="example" action="action_page.php">
  <input type="text" placeholder="Discover Salons Near Me" name="search">
  <button type="submit"><i class="fa fa-search"></i></button>
</form>
</div>
    <div class="col-md-6 col-sm-12" id="instant2"><img src="View/images/hair.png" alt="" id="img1" height="450"></div>
  </div>
</div>
</section>

<!-- Stylists Section -->
<section class="property-section">
		<div class="container p-20">
			<div class="section-title">
				<h2>Categories</h2>
			</div>
			<div class="row">
				<div class="col-lg-6">
					<div class="property-item">
						<div class="pi-image">
							<img src="View/images/st1.png" alt="">
							<div class="pi-badge new">***</div>
						</div>
						<h5>Book A Hair Stylist</h5>
						<p>Need your hair done at the comfort of your home?. Look no further. Book now.	<a href="#" class="readmore-btn">Find out more</a>
					</div>
				</div>
				<div class="col-lg-6">
					<div class="property-item">
						<div class="pi-image">
							<img src="View/images/st2.png" alt="">
							<div class="pi-badge offer">***</div>
						</div>
						<h5>Book A Salon</h5>
						<p>Tired of waiting for hours in a salon for your turn?. Time is money, why waste it?. Book now and skip the line.<a href="#" class="readmore-btn">Find out more</a>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- Stylists Section end -->

<!-- Stylists Section -->
<section class="property-section">
		<div class="container">
			<div class="section-title">
				<h2>Featured Stylists</h2>
			</div>
			<div class="row">
				<div class="col-lg-4">
					<div class="property-item">
						<div class="pi-image">
							<img src="View/images/st1.png" alt="">
							<div class="pi-badge new">***</div>
						</div>
						<h5>Shantel</h5>
						<p>Donec eget efficitur ex. Donec eget dolor vitae eros feugiat tristique id vitae massa. Proin vulputate congue rutrum. Fusce lobortis a enim eget tempus. Class aptent taciti sociosqu ad litora.</p>
						<a href="#" class="readmore-btn">Find out more</a>
					</div>
				</div>
				<div class="col-lg-4">
					<div class="property-item">
						<div class="pi-image">
							<img src="View/images/st2.png" alt="">
							<div class="pi-badge offer">***</div>
						</div>
						<h5>Zama</h5>
						<p>Donec eget efficitur ex. Donec eget dolor vitae eros feugiat tristique id vitae massa. Proin vulputate congue rutrum. Fusce lobortis a enim eget tempus. Class aptent taciti sociosqu ad litora.</p>
						<a href="#" class="readmore-btn">Find out more</a>
					</div>
				</div>
				<div class="col-lg-4">
					<div class="property-item">
						<div class="pi-image">
							<img src="View/images/st3.png" alt="">
							<div class="pi-badge new">***</div>
						</div>
						<h5>Sli</h5>
						<p>Donec eget efficitur ex. Donec eget dolor vitae eros feugiat tristique id vitae massa. Proin vulputate congue rutrum. Fusce lobortis a enim eget tempus. Class aptent taciti sociosqu ad litora.</p>
						<a href="#" class="readmore-btn">Find out more</a>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- Stylists Section end -->

</section>
<!-- Salons Section -->
<section class="property-section">
		<div class="container">
			<div class="section-title">
				<h2>Featured Salons</h2>
			</div>
			<div class="row">
				<div class="col-lg-4">
					<div class="property-item">
						<div class="pi-image">
							<img src="View/images/salon1.jpg" alt="">
							<div class="pi-badge new">***</div>
						</div>
						<h5>Beauty Zone</h5>
						<p>Donec eget efficitur ex. Donec eget dolor vitae eros feugiat tristique id vitae massa. Proin vulputate congue rutrum. Fusce lobortis a enim eget tempus. Class aptent taciti sociosqu ad litora.</p>
						<a href="#" class="readmore-btn">Find out more</a>
					</div>
				</div>
				<div class="col-lg-4">
					<div class="property-item">
						<div class="pi-image">
							<img src="View/images/salonTwo.png" alt="">
							<div class="pi-badge offer">***</div>
						</div>
						<h5>Magnific Hair & Beauty</h5>
						<p>Donec eget efficitur ex. Donec eget dolor vitae eros feugiat tristique id vitae massa. Proin vulputate congue rutrum. Fusce lobortis a enim eget tempus. Class aptent taciti sociosqu ad litora.</p>
						<a href="#" class="readmore-btn">Find out more</a>
					</div>
				</div>
				<div class="col-lg-4">
					<div class="property-item">
						<div class="pi-image">
							<img src="View/images/salonF.png" alt="">
							<div class="pi-badge new">***</div>
						</div>
						<h5>Beaut Hair Salon</h5>
						<p>Donec eget efficitur ex. Donec eget dolor vitae eros feugiat tristique id vitae massa. Proin vulputate congue rutrum. Fusce lobortis a enim eget tempus. Class aptent taciti sociosqu ad litora.</p>
						<a href="#" class="readmore-btn">Find out more</a>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- Salons Section end -->

<footer>
<p> YIYO © 2020 / All Rights Reserved</p>
</footer>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
 

</body>
</html>