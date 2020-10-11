<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title> Shopify </title>
		<!-- CSS -->
		<!-- BootStrap -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
		<!-- FontAwesome -->
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
		
		<!-- Custom CSS -->
		<link rel="stylesheet" href="style.css">
	</head>
<body>
	
	<!-- Header -->
	<header>
		<div class='container-fluid'>
			<div class='jumbotron text-center'>
				<h1>WebDev</h1>
				<p>Used for exercise purposes only</p>
			</div>
		</div>
	</header>
	<nav class='navbar navbar-inverse navbar-fixed-top'>
		<div class='container-fluid'>
			<header class='navbar-header'>
				<button type='button' class='navbar-toggle' data-toggle='collapse'
				data-target='#myNavbar'>
				<span class='icon-bar'></span>
				<span class='icon-bar'></span>
				<span class='icon-bar'></span>
				</button>
				<a class='navbar-brand' href='index1.php'> WebDev Home </a>
			</header>
		
		<div class='collapse navbar-collapse' id='myNavbar'>
			<ul class='nav navbar-nav'>
				<li><a href='#'>Products</a></li>
				<li><a href='#'>Deals</a></li>
			</ul>
			<ul class='nav navbar-nav navbar-right'>
				<li><a href='#'><span class='glyphicon glyphicon-user'></span>Sign In</a></li>
				<li><a href='#'><span class='glyphicon glyphicon-shopping-cart'></span>Cart</a></li>
				<li>
					<form class='navbar-form' action='#' method='POST'>
							<input type='text' class='form-control'	placeholder='Search for a Product'>
							<button type='submit' class='btn btn-primary'><span class='glyphicon glyphicon-search'></span> </button> 
					</form>
				</li>
			</ul>
		</div>
		</div>
	</nav>
	<!-- Main -->
	<main>
		<div class='container'>
			<div class='row'>
				<div class='col-md-3'>
					<p class='lead'>Product Range</p>
					<p>Computers<p>
					<div class='list-group'>
						<a href='#' class='list-group-item'>Category 1</a>
						<a href='#' class='list-group-item'>Category 2</a>
						<a href='#' class='list-group-item'>Category 3</a>
					</div>
					<p>Cars<p>
					<div class='list-group'>
						<a href='#' class='list-group-item'>Category 1</a>
						<a href='#' class='list-group-item'>Category 2</a>
						<a href='#' class='list-group-item'>Category 3</a>
					</div>
				</div>
				<div class='col-md-9'>
					<div class='row-carousel-holder'>
						<div class='col-md-12'>
							<div id='carousel-example-generic' class='carousel-slide' data-ride='carousel'>
								<ol class='carousel-indicators'>
									<li data-target='carousel-example-generic' data-slide-to='0' class='active'></li>
									<li data-target='carousel-example-generic' data-slide-to='1' ></li>
									<li data-target='carousel-example-generic' data-slide-to='2' ></li>
								</ol>
								<div class='carousel-inner'>
									<div class='item active'>
										<img class='slide-image' src='images/ds1.jpg' alt=''>
									</div>
									<div class='item'>
										<img class='slide-image' src='images/ds2.jpg' alt=''>
									</div>
									<div class='item'>
										<img class='slide-image' src='images/ds3.jpg' alt=''>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				</div>
			</div>
		</div>
	</main>
	<!-- Footer -->
	<footer class='text-center'>
		<nav class='nav navbar-inverse navbar-fixed-bottom'>
			<div class='container-fluid'>
				<ul class='nav navbar-nav'>
					<li class='navbar-text'>Copyright &copy; CJ Mosawan </li>
					<li><a href='https://github.com/naisuuu'><i class='fa fa-github'></i></a></li>
					<li><a href='https://www.linkedin.com/in/cjmosawan'><i class='fa fa-linkedin'></i></a></li>
					<li><a href='https://www.facebook.com/cjmosawan'><i class='fa fa-facebook'></i></a></li>
				</ul>
				<ul class='nav navbar-nav navbar-right'>
					<li><a>Site Map</a></li>
					<li><a>Contact</a></li>
					<li><a>Terms &amp; Conditions</a></li>
				</ul>
			</div>
		<nav>
	</footer>
	<!-- JavaScript -->
	
	<!-- JQuery -->
	<script src="https://code.jquery.com/jquery-3.5.1.min.js" 
	integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" 
	crossorigin="anonymous"></script>
	
	<!-- BootStrap JavaScript -->
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" 
	integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" 
	crossorigin="anonymous"></script>
	
</body>


</html>