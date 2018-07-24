<?php include'header.php'; ?>

<header class="home-banner forms-banner" role="banner" style="background-image: url(img/home/home-banner-2.png)">
	<div class="overlay"></div>
	<div class="row h-100">
		<div class="col-md-12 my-auto text-center">	
			<h1>
				Categories
			</h1>				
		</div>
	</div>
</header>

<div class="container categories-outer-container">
	<div class="row location-row">
		<div class="col-11 text-left">
			<form action="#" style="max-width:367px">
				<input type="text" placeholder="Search for Services" name="location-categories" class="rate-row-number-hr">
				<button type="submit" class="btn btn-primary send-otp-btn btn-post-job btn-location-search">
					<i class="fas fa-search"></i>
				</button>
			</form>
		</div>
	</div>
	
	<div class="container categories-container" id="categories">
		<!-- first row -->
		<div class="row">
			<div class="col-md-4 jumbotron">
				<button type="button" data-toggle="collapse" data-target="#all-categories" aria-expanded="false" class="btn btn-primary send-otp-btn btn-post-job categories-btn">All Categories</button>
			</div>
			<div class="col-md-4 jumbotron">
				<button type="button" data-toggle="collapse" data-target="#electronics" aria-expanded="false" class="btn btn-primary send-otp-btn btn-post-job categories-btn">Electronics &amp; Appliances</button>
			</div>
			<div class="col-md-4 jumbotron">
				<button type="button" data-toggle="collapse" data-target="#cleaning-services" aria-expanded="false" class="btn btn-primary send-otp-btn btn-post-job categories-btn">Cleaning Services</button>
			</div>
		</div>
		<div class="row">
			<div class="col-12">
				<div id="all-categories" class="col-12 text-left collapse categories-info" data-parent="#categories">
					<h1>All Categories</h1>					
				</div>
				<div id="electronics" class="col-12 text-left collapse categories-info" data-parent="#categories">			
					<h1>Electronics &amp; Appliance</h1>					
					<!-- <div class="col-md-4">
						<button type="button" data-toggle="collapse" data-target="#comp-services" aria-expanded="false" class="btn btn-primary send-otp-btn btn-post-job categories-btn">Computer Services</button>
					</div>
					<div class="row">
					<div id="comp-services" class="col-12 text-left collapse categories-info">			
							<h1>Computer Services</h1>
						</div>
					</div>
				-->				
				</div>
				<div id="cleaning-services" class="col-12 text-left collapse categories-info" data-parent="#categories">			
					<h1>Cleaning Services</h1>
				</div>
			</div>
		</div>

		<!-- second row -->
		<div class="row">
			<div class="col-md-4 jumbotron">
				<button type="button" data-toggle="collapse" data-target="#movies" aria-expanded="false" class="btn btn-primary send-otp-btn btn-post-job categories-btn">Movies</button>
			</div>
			<div class="col-md-4 jumbotron">
				<button type="button" data-toggle="collapse" data-target="#events" aria-expanded="false" class="btn btn-primary send-otp-btn btn-post-job categories-btn">Events &amp; Occasions</button>
			</div>
			<div class="col-md-4 jumbotron">
				<button type="button" data-toggle="collapse" data-target="#automobile" aria-expanded="false" class="btn btn-primary send-otp-btn btn-post-job categories-btn">Automobile Services</button>
			</div>
		</div>
		<div class="row">
			<div class="col-12">
				<div id="movies" class="col-12 text-left collapse categories-info" data-parent="#categories">		
					<h1>Movies</h1>
				</div>
				<div id="events" class="col-12 text-left collapse categories-info" data-parent="#categories">		
					<h1>Events &amp; Occasions</h1>					
				</div>
				<div id="automobile" class="col-12 text-left collapse categories-info" data-parent="#categories">	
					<h1>Automobile Services</h1>
				</div>
			</div>
		</div>

		<!-- third row -->
		<div class="row">
			<div class="col-md-4 jumbotron">
				<button type="button" data-toggle="collapse" data-target="#home-maintenance" aria-expanded="false" class="btn btn-primary send-otp-btn btn-post-job categories-btn">Home Maintenance</button>
			</div>
			<div class="col-md-4 jumbotron">
				<button type="button" data-toggle="collapse" data-target="#health" aria-expanded="false" class="btn btn-primary send-otp-btn btn-post-job categories-btn">Health &amp; Fitness</button>
			</div>
			<div class="col-md-4 jumbotron">
				<button type="button" data-toggle="collapse" data-target="#spa" aria-expanded="false" class="btn btn-primary send-otp-btn btn-post-job categories-btn">Spa &amp; Salon</button>
			</div>
		</div>
		<div class="row">
			<div class="col-12">
				<div id="home-maintenance" class="col-12 text-left collapse categories-info" data-parent="#categories">
					<h1>Home Maintenance</h1>							
				</div>
				<div id="health" class="col-12 text-left collapse categories-info" data-parent="#categories">		
					<h1>Health &amp; Fitness</h1>
				</div>
				<div id="spa" class="col-12 text-left collapse categories-info" data-parent="#categories">			
					<h1>Spa &amp; Salon</h1>
				</div>
			</div>
		</div>
	</div>
</div>

<?php include'footer.php'; ?>