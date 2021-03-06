<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Search Food, Restaurant by Name, Area</title>
		
		<!-- Google Fonts -->
		<link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,900" rel="stylesheet"> 
		<link href="https://fonts.googleapis.com/css?family=Atma:300,400,500,600,700" rel="stylesheet"> 
		<link href="https://fonts.googleapis.com/css?family=Yatra+One" rel="stylesheet">

        <link href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
        <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css" rel="stylesheet">
        <link href="<?php echo base_url();?>assets/style.css" rel="stylesheet">
        <link href="<?php echo base_url();?>assets/css/responsive.css" rel="stylesheet">


        <!--[if lt IE 9]>
        <script src="//oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script src="//oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>
    <body>
        
		<!-- Header Starts Here -->
		<header>
			<div class="container">
				<div class="col-sm-4">
					<div class="logo">
						<a href="index.html"><h2>Hungry Mia</h2></a>
					</div>
				</div>
					
				<div class="col-sm-8">
					<div class="menu">
						<nav>
							<ul>
								<li><a href="#" class="registerBtn" data-toggle="modal" data-target="#myModal">Hot Trends</a></li>
								<li><a href="#" class="registerBtn" data-toggle="modal" data-target="#myModal">Sell Your Food</a></li>
								<li><a href="#" class="loginBtn" data-toggle="modal" data-target="#myModal">LogIn/SignUp</a></li>
							</ul>
						</nav>
					</div>
				</div>
			</div>
		</header>
		<!-- Header Ends Here -->
		
		<!-- Main Starts Here -->
		<main>
			<div class="section-area">
				<div class="container">
					<div class="row">
						<div class="col-sm-12">
							<h2 class="text-center primary-heading">Search Any Food or Restaurant</h2>
						</div>
					</div>
					<div class="row">
						<div class="search-area">
							<div class="col-sm-8 col-sm-offset-2">
							 
								<form class="" role="search">
									<div class="input-group">
									
										<div class="input-group-btn search-by-option">
											<button type="button" class="btn btn-search btn-default dropdown-toggle" data-toggle="dropdown">
												<span class="label-icon">Food</span>
												<span class="caret"></span>
											</button>
											<ul class="dropdown-menu pull-left" role="menu">
											   <li>
													<a href="#">
														<span class="label-icon">Food</span>
													</a>
												</li>
												<li>
													<a href="#">
													<span class="label-icon">Restaurant</span>
													</a>
												</li>
											</ul>
										</div>
							
										<input type="text" placeholder="Write here . . ." class="form-control">
									
										<div class="input-group-btn">
											<button type="button" class="btn btn-search btn-default">
											GO
											</button>
										</div>
										
									</div>  
								</form>  
							</div>
						</div>
					</div>
				</div>
			</div>
			
			<hr class="no-mar" />
			
			<div class="hot-offer-area">
				<div class="section-area">
					<div class="container">
						<h2 class="text-center primary-heading">Hot Offers</h2>
						<div class="row">
							<div class="hot-offer-single-item">
								<img src="<?php echo base_url();?>assets/img/offer-1.jpg" alt="" />
							</div>
							<div class="hot-offer-single-item">
								<img src="<?php echo base_url();?>assets/img/offer-2.jpg" alt="" />
							</div>
							<div class="hot-offer-single-item">
								<img src="<?php echo base_url();?>assets/img/offer-3.jpg" alt="" />
							</div>
							<div class="hot-offer-single-item">
								<img src="<?php echo base_url();?>assets/img/offer-1.jpg" alt="" />
							</div>
						</div>
					</div>
				</div>
			</div>
			
			<hr class="no-mar" />
			
			<div class="search-by-area">
				<div class="section-area">
					<div class="container">
						<h2 class="text-center primary-heading">Search By Area</h2>
						<div class="row">
							<div class="col-sm-4 col-md-3 col-lg-2">
								<ul>
									<li><a href="#">Gulshan</a></li>
									<li><a href="#">Banani</a></li>
									<li><a href="#">Basundhara</a></li>
									<li><a href="#">Baridhara</a></li>
									<li><a href="#">Uttara</a></li>
								</ul>
							</div>
							<div class="col-sm-4 col-md-3 col-lg-2">
								<ul>
									<li><a href="#">Gulshan</a></li>
									<li><a href="#">Banani</a></li>
									<li><a href="#">Basundhara</a></li>
									<li><a href="#">Baridhara</a></li>
									<li><a href="#">Uttara</a></li>
								</ul>
							</div>
							<div class="col-sm-4 col-md-3 col-lg-2">
								<ul>
									<li><a href="#">Gulshan</a></li>
									<li><a href="#">Banani</a></li>
									<li><a href="#">Basundhara</a></li>
									<li><a href="#">Baridhara</a></li>
									<li><a href="#">Uttara</a></li>
								</ul>
							</div>
							<div class="col-sm-4 col-md-3 col-lg-2">
								<ul>
									<li><a href="#">Gulshan</a></li>
									<li><a href="#">Banani</a></li>
									<li><a href="#">Basundhara</a></li>
									<li><a href="#">Baridhara</a></li>
									<li><a href="#">Uttara</a></li>
								</ul>
							</div>
							<div class="col-sm-4 col-md-3 col-lg-2">
								<ul>
									<li><a href="#">Gulshan</a></li>
									<li><a href="#">Banani</a></li>
									<li><a href="#">Basundhara</a></li>
									<li><a href="#">Baridhara</a></li>
									<li><a href="#">Uttara</a></li>
								</ul>
							</div>
							<div class="col-sm-4 col-md-3 col-lg-2">
								<ul>
									<li><a href="#">Gulshan</a></li>
									<li><a href="#">Banani</a></li>
									<li><a href="#">Basundhara</a></li>
									<li><a href="#">Baridhara</a></li>
									<li><a href="#">Uttara</a></li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
		
		</main>
		<!-- Main Ends Here -->
			
		<!-- Footer Area Starts Here -->
		<footer>
			<div class="section-area">
				<div class="container">
					<div class="row">
						<div class="col-sm-3">
							<h3>FoodFinderBD</h3>
							<ul class="about">
								<li><a href="#">About Us</a></li>
								<li><a href="#">Contact</a></li>
								<li><a href="#">Terms and conditions</a></li>
								<li><a href="#">Privacy policy</a></li>
								<li><a href="#">Certified partner</a></li>
							</ul>
						</div>
						<div class="col-sm-3">
							<h3>Get in touch</h3>
							<ul class="social">
								<li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
								<li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
								<li><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
								<li><a href="#"><i class="fa fa-pinterest-p" aria-hidden="true"></i></a></li>
								<li><a href="#"><i class="fa fa-youtube" aria-hidden="true"></i></a></li>
							</ul>
						</div>
						<div class="col-sm-3">
							<h3>Help Line</h3>
							<ul class="help">
								<li><a href="#"><span><i class="fa fa-phone-square" aria-hidden="true"></i></span> 01700-000-000</a></li>
								<li><a href="#"><span><i class="fa fa-phone-square" aria-hidden="true"></i></span> 01799-999-999</a></li>
								<li><a href="#"><span><i class="fa fa-envelope" aria-hidden="true"></i></span> contact@foodfinderbd.com</a></li>
								<li><a href="#"><span><i class="fa fa-skype" aria-hidden="true"></i></span> foodFinderBD</a></li>
							</ul>
						</div>
						<div class="col-sm-3">
							<h3>To Get All Offer & Updates</h3>
							<form action="" class="email-subs">
								<input type="email" name="subs-email" placeholder="Your Email" required />
								<button type="submit">Submit</button>
							</form>
						</div>
					</div>
				</div>
			</div>
		</footer>
		
		<div class="footer-bottom">
			<div class="container">
				<div class="row">
					<div class="col-sm-6">
						<p class="footer_bottom_left">&copy; All Rights Reserved by Foods Finder</p>
					</div>
					<div class="col-sm-6">
						<p class="footer_bottom_right">IT Partner  <a href="" title="Click to visit Secure Softs" target="_black">Secure Softs</a></p>
					</div>
				</div>
			</div>
		</div>
		<!-- Footer Area Ends Here -->
		
		<!-- Login and Register Modal -->
		<div class="modal login-register-modal" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
		  <div class="modal-dialog" role="document">
			<div class="modal-content login-modal-content">
			  <div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				<h4 class="modal-title" id="myModalLabel">Login to Your Account</h4>
			  </div>
			  <div class="modal-body">
				<form id="login-form">
				  <div class="form-group">
					<label for="exampleInputEmail1">Email address</label>
					<input type="email" class="form-control" id="exampleInputEmail1" name="username" placeholder="Email">
				  </div>
				  <div class="form-group">
					<label for="exampleInputPassword1">Password</label>
					<input type="password" class="form-control" id="exampleInputPassword1" name="password" placeholder="Password">
				  </div>
				  <button type="submit" class="btn">Login</button>
				  
				</form>
			  </div>
			   <div class="modal-footer">
				<div class="row">
					<div class="col-xs-6">
						<p>(Forget your password)</p>
						<a href="#" class="forgetPassBtn">Reset Password ?</a>
					</div>
					<div class="col-xs-6">
						<p>(Don't have account yet)</p>
						<a href="#" class="registerBtn">Register</a>
					</div>
				</div>
			  </div>
			</div>
			
			<div class="modal-content register-modal-content">
			  <div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				<h4 class="modal-title" id="myModalLabel">Register an Account</h4>
			  </div>
			  <div class="modal-body">
				<form>
				  <div class="form-group">
					<label for="exampleInputEmail1">User Name</label>
					<input type="email" class="form-control" id="exampleInputEmail1" placeholder="User Name">
				  </div>
				  <div class="form-group">
					<label for="exampleInputEmail1">Email address</label>
					<input type="email" class="form-control" id="exampleInputEmail1" placeholder="Email">
				  </div>
				  <div class="form-group">
					<label for="exampleInputPassword1">Password</label>
					<input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
				  </div>
				  <div class="form-group">
					<label for="exampleInputPassword1">Repeat Password</label>
					<input type="password" class="form-control" id="exampleInputPassword1" placeholder="Repeat Password">
				  </div>
				  <button type="submit" class="btn">Submit</button>
				  
				</form>
			  </div>
			   <div class="modal-footer">
				<div class="row">
					<div class="col-xs-6">
						<p>(Forget your password)</p>
						<a href="#" class="forgetPassBtn">Reset Password ?</a>
					</div>
					<div class="col-xs-6">
						<p>(Already have account)</p>
						<a href="#" class="loginBtn">Login</a>
					</div>
				</div>
			  </div>
			</div>
			
			<div class="modal-content forget-pass-modal-content">
			  <div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				<h4 class="modal-title" id="myModalLabel">Reset Password</h4>
			  </div>
			  <div class="modal-body">
				<form>
				  <div class="form-group">
					<label for="exampleInputEmail1">Type your Email</label>
					<input type="email" class="form-control" id="exampleInputEmail1" placeholder="Type your Email">
				  </div>
				  <button type="submit" class="btn">Send New Password</button>
				  
				</form>
			  </div>
			   <div class="modal-footer">
				<div class="row">
					<div class="col-xs-6">
						<p>(Already have account)</p>
						<a href="#" class="loginBtn">Login</a>
					</div>
					<div class="col-xs-6">
						<p>(Don't have account yet)</p>
						<a href="#" class="registerBtn">Register</a>
					</div>
				</div>
			  </div>
			</div>
		  </div>
		</div>
			
		<script type="text/javascript">
			window.base_url = "<?php echo base_url(); ?>";
		</script>
		
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <script src="<?php echo base_url();?>assets/js/main.js"></script>
        <script src="<?php echo base_url();?>assets/js/home-script.js"></script>
    </body>
</html>
