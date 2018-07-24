<?php include "header.php"; ?>

<header class="home-banner forms-banner" role="banner" style="background-image: url(img/home/home-banner-2.png)">
	<div class="overlay"></div>
	<div class="row h-100">
		<div class="col-md-12 my-auto text-center">	
			<h1>
				Sign Up
			</h1>				
		</div>
		<div class="col-md-12 text-left folder-path">
			<p>Home/<b claas="color">Sign up</b></p>			
		</div>
	</div>
</header>

<div class="container forms-section">
	<div class="row forms-section-row">
		<div class="col-12 col-md-8 offset-md-2 col-lg-6 offset-lg-3">
			<div class="card">
				<div class="card-header text-center">
					Sign Up
				</div>
				<div class="card-body">
					<form method="post" action="profile.php">
						<div class="form-group col-12 mb-3">
							<i class="fa fa-envelope fa-forms-email"></i>
							<input type="email" class="form-control" id="sign-up-email" aria-describedby="sign-up-email" placeholder="Enter your email">	
						</div>
						<div class="form-group col-12 mb-3">
							<i class="fa fa-lock fa-forms-lock"></i>
							<input type="password" class="form-control" id="sign-up-password" placeholder="Enter your password">
						</div>

						<div class="row or-row pt-3">
							<div class="col-4 col-sm-5 pl-4 pr-0">
								<hr>
							</div>	
							<div class="col-4 col-sm-2 text-center pt-1">
								<p>OR</p>
							</div>	
							<div class="col-4 col-sm-5 pr-4 pl-0">
								<hr>
							</div>					
						</div>

						<div class="form-group col-12 mb-3">
							<i class="fa fa-mobile-alt fa-forms-mobile"></i>
							<input type="number" class="form-control" id="sign-up-mobile-number" placeholder="Enter your mobile number">
						</div>
						<div class="form-group col-12 mb-3 text-center otp-form-group">
							<div class="row pt-3">
								<div class="col-12 col-md-5 text-md-right">
									<label for="otp-num" class="otp-num-label">Enter OTP</label>
								</div>
								<div class="col-12 col-md-7">
									<div class="row otp-input-row">
										<input type="number" class="form-control col-2 col-md-2 otp-number mr-1" id="otp-number1" placeholder="0">
										<input type="number" class="form-control col-2 col-md-2 otp-number mr-1" id="otp-number2" placeholder="0">
										<input type="number" class="form-control col-2 col-md-2 otp-number mr-1" id="otp-number3" placeholder="0">
										<input type="number" class="form-control col-2 col-md-2 otp-number mr-1" id="otp-number4" placeholder="0">
									</div>
								</div>								
							</div>
						</div>
						<div class="row checkbox-row">
							<div class="form-group form-check col-12 forms-checkbox text-center">
								<input type="checkbox" class="form-check-input" id="checkbox-sign-up">
								<label class="form-check-label" for="checkbox-sign-up">By registering, you accept our Terms &amp; Conditions</label>
							</div>							
						</div>
						<div class="col-12 send-otp-colm text-center">
							<button type="submit" class="btn btn-primary send-otp-btn btn-post-job">Submit</button>
						</div>						
					</form>

				</div>
			</div>
		</div>
	</div>	
</div>

<?php include "footer.php"; ?>
