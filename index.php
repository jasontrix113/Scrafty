<!DOCTYPE html>
<html>
<head>
	<title>Scrafty</title>
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/main.css">
	<meta name="viewport"content="width=device-width, initial-scale=1, user-scaleable=no">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
	<script src="js/bootstrap.min.js">
	</script>
	<script src="main.js"></script>
</head>
<body>
	<nav class="navbar navbar-default navbar-fixed-top" id="navbar">
		<div class="container">
			<a href="/Scrafty/index.php" class="navbar-brand" id="text">Scrafty</a>
			<ul class="nav navbar-nav navbar-right">
				<!-- navbar-left  -->
				<li>
					<a href="#" id="text">About Us</a>
				</li><!-- /about Us -->
				<li>
					<a href="#" id="text">Terms and Conditions</a>
				</li><!--  /Terms and Conditions -->
				<!-- Drop Down Menu -->
				<li class="dropdown">
					<a href="#" class="dropdown" data-toggle="dropdown" id="text">Our Store <span class="caret"></span></a>
					<ul class="dropdown-menu">
						<li class="dropdown-submenu">
							<a href="#" class="dropdown" data-toggle="dropdown">Bags <span class="caret"></span></a>
							<ul class="dropdown-menu">
								<li class="nav-link"><a href="#">Item 1</a></li>
								<li class="nav-link"><a href="#">Item 2</a></li>
								<li class="nav-link"><a href="#">Item 3</a></li>
							</ul><!-- /dropdown-menu -->
						</li><!-- dropdown-submenu -->
						<li><a href="#">Furnitures</a></li>
						<li><a href="#">Accessories</a></li>
					</ul><!-- /dropdown-menu -->
				</li><!-- /dropdown -->
				<li>
					<a href="#" id="text">Contact Us</a>
				</li><!-- /contact us -->
			</ul><!-- /navbar-nav -->
		</div><!-- /container -->
	</nav><!-- /navigation -->
	<!-- Inserting Images -->
		<div id="background-image">
			<div id="image-1"></div>
			<div id="image-2"></div>
		</div><!-- /background-image -->

		<!-- remove the spaces and center the products -->
		<div class="col-md-2"></div>

		<!-- main content of featured products -->
		<div class="col-md-8">
			<div class="row">
				<h2 class="text-center">Featured Products</h2>
				<br>
				<br>
				<br>
				<div class="col-md-4">
					<h4>Bag 1</h4>
					<img src="images/bag1.jpg" alt="Bag 1" id="images">
					<p class="list-price text-danger">List Price: <s>$24.99</s></p>
					<p class="price"> Our Price: $19.99 </p>
					<button type="button" class="btn btn-success" data-toggle="modal" data-target="#details-1">Details</button>
				</div><!-- /col-md-3 -->

				<div class="col-md-4">
					<h4>Bag 2</h4>
					<img src="images/bag2.jpg" alt="Bag 2" id="images">
					<p class="list-price text-danger">List Price: <s>$39.99</s></p>
					<p class="price"> Our Price: $29.99 </p>
					<button type="button" class="btn btn-success" data-toggle="modal" data-target="#details-2">Details</button>
				</div><!-- /col-md-3 -->

				<div class="col-md-4">
					<h4>Bag 3</h4>
					<img src="images/bag3.jpg" alt="Bag 3" id="images">
					<p class="list-price text-danger">List Price: <s>$20.99</s></p>
					<p class="price"> Our Price: $19.99 </p>
					<button type="button" class="btn btn-success" data-toggle="modal" data-target="#details-3">Details</button>
				</div><!-- /col-md-3 -->

				<div class="col-md-4">
					<h4>Furniture 1</h4>
					<img src="images/furni1.jpg" alt="Furniture 1" id="images">
					<p class="list-price text-danger">List Price: <s>$54.99</s></p>
					<p class="price"> Our Price: $19.99 </p>
					<button type="button" class="btn btn-success" data-toggle="modal" data-target="#details-4">Details</button>
				</div><!-- /col-md-3 -->

				<div class="col-md-4">
					<h4>Furniture 2</h4>
					<img src="images/furni2.jpg" alt="Furniture 2" id="images">
					<p class="list-price text-danger">List Price: <s>$54.99</s></p>
					<p class="price"> Our Price: $19.99 </p>
					<button type="button" class="btn btn-success" data-toggle="modal" data-target="#details-5">Details</button>
				</div><!-- /col-md-3 -->

				<div class="col-md-4">
					<h4>Furniture 3</h4>
					<img src="images/furni3.jpg" alt="Furniture 3" id="images">
					<p class="list-price text-danger">List Price: <s>$54.99</s></p>
					<p class="price"> Our Price: $19.99 </p>
					<button type="button" class="btn btn-success" data-toggle="modal" data-target="#details-6">Details</button>
				</div><!-- /col-md-3 -->

				<div class="col-md-4">
					<h4>Accessories 1</h4>
					<img src="images/acc1.jpg" alt="Accessories 1" id="images">
					<p class="list-price text-danger">List Price: <s>$54.99</s></p>
					<p class="price"> Our Price: $19.99 </p>
					<button type="button" class="btn btn-success" data-toggle="modal" data-target="#details-7">Details</button>
				</div><!-- /col-md-3 -->

				<div class="col-md-4">
					<h4>Accessories 2</h4>
					<img src="images/acc2.jpg" alt="Accessories 2" id="images">
					<p class="list-price text-danger">List Price: <s>$54.99</s></p>
					<p class="price"> Our Price: $19.99 </p>
					<button type="button" class="btn btn-success" data-toggle="modal" data-target="#details-8">Details</button>
				</div><!-- /col-md-3 -->

				<div class="col-md-4">
					<h4>Accessories 3</h4>
					<img src="images/acc3.jpg" alt="Accessories 3" id="images">
					<p class="list-price text-danger">List Price: <s>$54.99</s></p>
					<p class="price"> Our Price: $19.99 </p>
					<button type="button" class="btn btn-success" data-toggle="modal" data-target="#details-9">Details</button>
				</div><!-- /col-md-3 -->
			</div><!-- row -->
			<footer class="text-center" id="footer">&copy; Copyright 2018-2019 Scrafty</footer>
		</div><!-- col-md-8 -->

		<!-- details modal -->
		
		<?php 
			include 'includes/details-modal-bag1.php';
			include 'includes/details-modal-bag2.php';
			include 'includes/details-modal-bag3.php';
		?>
</body>
</html>