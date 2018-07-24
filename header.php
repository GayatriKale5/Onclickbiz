<!DOCTYPE HTML>
<html>
<head>
	<meta charset="utf-8">  
	<title>Onclickbiz</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<link href="https://fonts.googleapis.com/css?family=Work+Sans:400,500" rel="stylesheet">

	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css">

	<!-- Bootstrap  -->
	<link rel="stylesheet" href="css/vendor/bootstrap.min.css">

	<!-- custom css -->
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="css/animate.css">

</head> 

<body>

	<nav class="navbar navbar-expand-lg navbar-light onclick-navbar">		
		
		<div id="onclick-logo col-md-1 text-center">
			<a href="index.php" class="navbar-brand">
				<img src="img/header/onclickbiz-logo.png" class="img-fluid home-header-logo">
			</a>
		</div>		

		<button class="navbar-toggler onclick-navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>
		
		<div class="collapse navbar-collapse onclick-navbar-collapse col-md-9 col-md-offset-2" id="navbarNavDropdown">
			<ul class="navbar-nav onclick-navbar-nav">
				<li class="nav-item  active">
					<a class="nav-link" href="home.php">HOME</a>
				</li>
				<li class="nav-item ml-3">
					<a class="nav-link" href="categories.php">CATEGORIES</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="#">LISTINGS</a>
				</li>
				<li class="nav-item dropdown"> 
					<a class="nav-link dropdown-toggle onclick-dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
						PAGES
					</a>
					<div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
						<a class="dropdown-item" href="sign-up.php">Sign Up</a>
						<a class="dropdown-item" href="login.php">Login</a>
						<a class="dropdown-item" href="post-free-job.php">Post Free Job</a>
						<a class="dropdown-item" href="search-job.php">Search Job</a>
						<a class="dropdown-item" href="profile.php">Profile</a>		
						<a class="dropdown-item" href="product.php">Product</a>		
						<a class="dropdown-item" href="detail-product.php">Detail Product</a>	
						<a class="dropdown-item" href="categories.php">Categories</a>	
					</div>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="#">BLOG</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="#">CONTACT</a>
				</li>

				
				<!-- 				<a href="#" class="btn btn-primary btn-my-account">My Account</a>	 -->
				
				<li class="nav-item dropdown my-acc-nav-item">
					<a class="nav-link dropdown-toggle onclick-dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="color:#34A8DD !important">
						My Account
					</a>
					<div class="dropdown-menu my-acc-dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
						<a class="dropdown-item" href="#">Lorem Ipsum</a>
						<a class="dropdown-item" href="#">Lorem Ipsum</a>
					</div>
				</li>

				<a href="sign-up.php" class="btn btn-primary btn-post-job">Post Job</a>
			</ul>
		</div>
	</nav>