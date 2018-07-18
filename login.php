<?php include "header.php"; ?>

<header class="home-banner forms-banner" role="banner" style="background-image: url(img/home/home-banner-2.png)">
	<div class="overlay"></div>
	<div class="row h-100">
		<div class="col-md-12 my-auto text-center">	
			<h1>
				Login
			</h1>				
		</div>
		<div class="col-md-12 text-left folder-path">
			<p>Home/<b claas="color">Login</b></p>			
		</div>
	</div>
</header>

<div class="container forms-section">
	<div class="row forms-section-row">
		<div class="col-12 col-md-8 offset-md-2 col-lg-6 offset-lg-3">
			<div class="card">
				<div class="card-header text-center">
					Login Now
				</div>
				<div class="card-body">
					<form method="post" action="#">
						<div class="form-group col-12 mb-3">
							<i class="fa fa-user fa-forms-user"></i>
							<input type="text" class="form-control" id="name" placeholder="Enter your name">					
						</div>
						<div class="form-group col-12 mb-3">
							<i class="fa fa-mobile-alt fa-forms-mobile"></i>
							<input type="number" class="form-control" id="mobile-number" placeholder="Enter your mobile number">
						</div>
						<div class="row checkbox-row">
							<div class="form-group form-check col-12 col-md-6 pl-5 forms-checkbox text-center">
								<input type="checkbox" class="form-check-input" id="checkbox-login">
								<label class="checkbox-login" for="exampleCheck1">Keep me logged in</label>
							</div>
							<div class="col-12 col-md-6 forgot-password pl-5 pb-2 text-center">
								<a href="#">Forgot Password?</a>
							</div>
						</div>
						<div class="col-12 send-otp-colm text-center">
							<button type="submit" class="btn btn-primary send-otp-btn btn-post-job">Send OTP</button>
						</div>						
					</form>

				</div>
			</div>
		</div>
	</div>	
</div>

<?php include "footer.php"; ?>
