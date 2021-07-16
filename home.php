<?php 

session_start();

if(empty($_SESSION['sEmail'])):
   header('Location:login.html');
endif;
?>

<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>KUPTM Club</title>
		<!-- Description, Keywords and Author -->
		<meta name="description" content="Your description">
		<meta name="keywords" content="Your,Keywords">
		<meta name="author" content="ResponsiveWebInc">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
	
		<!-- Styles -->
		<!-- Bootstrap CSS -->
		<link href="css/bootstrap.min.css" rel="stylesheet">
		<!-- Font awesome CSS -->
		<link href="css/font-awesome.min.css" rel="stylesheet">		
		<!-- Custom CSS -->
		<link href="css/style.css" rel="stylesheet">
		
		<!-- Favicon -->
		<link rel="shortcut icon" href="#">
	</head>
	
	<body>
	
		<div class="wrapper">
		<?php include "banner.php"; ?> <!-- Banner -->
			
						<!-- main content -->
			<div class="main-content bottom-0">
				<div class="container">
					<div class="banner pad">
						<h1><span>KUPTM CLUB SYSTEM</span></h1>
						<p><strong>You can check your club information here.</strong></p>
					</div>
				</div>
				
				<!-- hero -->
				<div class="hero pad">
					<div class="container">
						<div class="hero-content">
							<!-- heading -->
							<h2>Get ready for peacefully zone</h2>
							<!-- paragraph -->
							<p>Secure Everything with prelog.</p>
							<!-- button -->
							<a href="#" class="btn btn-warning">Explore Things</a>
						</div>
					</div>
				</div>
				
				<!-- benefits -->
				<div class="benefits pad">
					<div class="container">
						<div class="default-heading">	
							<!-- heading -->
							<h2>Our Benefits</h2>
						</div>
						<div class="row">
							<div class="col-md-3 col-sm-6">
								<!-- benefits item -->
								<div class="benefits-item">
									<!-- icon -->
									<i class="fa fa-desktop" style="color: red"></i>
									<!-- heading -->
									<h3>Desktop Edge</h3>
									<!-- paragraph -->
									<p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.</p>
								</div>
							</div>
							<div class="col-md-3 col-sm-6">
								<!-- benefits item -->
								<div class="benefits-item">
									<!-- icon -->
									<i class="fa fa-paper-plane" style="color: red"></i>
									<!-- heading -->
									<h3>Carrier Desk</h3>
									<!-- paragraph -->
									<p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.</p>
								</div>
							</div>
							<div class="col-md-3 col-sm-6">
								<!-- benefits item -->
								<div class="benefits-item">
									<!-- icon -->
									<i class="fa fa-briefcase" style="color: red"></i>
									<!-- heading -->
									<h3>Stock Exchange</h3>
									<!-- paragraph -->
									<p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.</p>
								</div>
							</div>
							<div class="col-md-3 col-sm-6">
								<!-- benefits item -->
								<div class="benefits-item">
									<!-- icon -->
									<i class="fa fa-envelope" style="color: red"></i>
									<!-- heading -->
									<h3>Packaging Mart</h3>
									<!-- paragraph -->
									<p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.</p>
								</div>
							</div>
						</div>
					</div>
				</div>
				
				<!-- call to action -->
				<div class="cta">
					<div class="container">
						<div class="cta-content">
							<!-- heading -->
							<h3>Don't Feel Insecure with <span>PRELOG</span></h3>
							<!-- paragraph -->
							<p>Tales from those who follow the prelog way wherever it leads</p>
						</div>
					</div>
				</div>
				
				<!-- testimonial -->
				<div class="testimonial">
					<div class="container">
						<div id="carousel-generic" class="carousel slide" data-ride="carousel">

							<!-- Wrapper for slides -->
							<div class="carousel-inner">
								<div class="item active pad">
									<!-- heading -->
									<h3>-@Himanshu</h3>
									<!-- paragraph -->
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
								</div>
								<div class="item pad">
									<!-- heading -->
									<h3>-@Avijit Sha</h3>
									<!-- paragraph -->
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
								</div>
								<div class="item pad">
									<!-- heading -->
									<h3>-@Sashi Kumar</h3>
									<!-- paragraph -->
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
								</div>
							</div>

							<!-- Controls -->
							<a class="left carousel-control" href="#carousel-generic" role="button" data-slide="prev">
								<span class="fa fa-chevron-left"></span>
							</a>
							<a class="right carousel-control" href="#carousel-generic" role="button" data-slide="next">
								<span class="fa fa-chevron-right"></span>
							</a>
						</div>
					</div>
				</div>
				
				<!-- blog -->
				<div class="blog pad">
					<div class="container">
						<div class="default-heading">	
							<!-- heading -->
							<h2>Our Blogs</h2>
						</div>
						<div class="row">
							<div class="col-md-6">
								<!-- blog entry -->
								<div class="entry">
									<!-- blog post image -->
									<div class="entry-pic">
										<img class="img-responsive" src="img/blog/1.jpg" alt="Blog Image" />
									</div>
									<!-- blog content details -->
									<div class="entry-post">
										<!-- blog information -->
										<span class="meta">Lorem Ipsum Passage</span>
										<!-- blog title -->
										<h3>Neque porro quisquam est qui dolorem</h3>
										<!-- paragraph -->
										<p>Duis aute irure dolor in repreh enderit in volu ptate velit esse cillum dolore eu fugiat nulla pariatur. Excep teur sint occaecat cupidatat non proident tate velit esse cillum dolore.</p>
									</div>
									<div class="clearfix"></div>
								</div>
							</div>
							<div class="col-md-6">
								<!-- blog entry -->
								<div class="entry">
									<!-- blog post image -->
									<div class="entry-pic">
										<img class="img-responsive" src="img/blog/2.jpg" alt="Blog Image" />
									</div>
									<!-- blog content details -->
									<div class="entry-post">
										<!-- blog information -->
										<span class="meta">Lorem Ipsum Passage</span>
										<!-- blog title -->
										<h3>Neque porro quisquam est qui dolorem</h3>
										<!-- paragraph -->
										<p>Duis aute irure dolor in repreh enderit in volu ptate velit esse cillum dolore eu fugiat nulla pariatur. Excep teur sint occaecat cupidatat non proident tate velit esse cillum dolore.</p>
									</div>
									<div class="clearfix"></div>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-md-6">
								<!-- blog entry -->
								<div class="entry">
									<!-- blog post image -->
									<div class="entry-pic">
										<img class="img-responsive" src="img/blog/3.jpg" alt="Blog Image" />
									</div>
									<!-- blog content details -->
									<div class="entry-post">
										<!-- blog information -->
										<span class="meta">Lorem Ipsum Passage</span>
										<!-- blog title -->
										<h3>Neque porro quisquam est qui dolorem</h3>
										<!-- paragraph -->
										<p>Duis aute irure dolor in repreh enderit in volu ptate velit esse cillum dolore eu fugiat nulla pariatur. Excep teur sint occaecat cupidatat non proident tate velit esse cillum dolore.</p>
									</div>
									<div class="clearfix"></div>
								</div>
							</div>
							<div class="col-md-6">
								<!-- blog entry -->
								<div class="entry">
									<!-- blog post image -->
									<div class="entry-pic">
										<img class="img-responsive" src="img/blog/4.jpg" alt="Blog Image" />
									</div>
									<!-- blog content details -->
									<div class="entry-post">
										<!-- blog information -->
										<span class="meta">Lorem Ipsum Passage</span>
										<!-- blog title -->
										<h3>Neque porro quisquam est qui dolorem</h3>
										<!-- paragraph -->
										<p>Duis aute irure dolor in repreh enderit in volu ptate velit esse cillum dolore eu fugiat nulla pariatur. Excep teur sint occaecat cupidatat non proident tate velit esse cillum dolore.</p>
									</div>
									<div class="clearfix"></div>
								</div>
							</div>
						</div>
						<div class="blog-btn">
							<!-- button -->
							<a href="#" class="btn btn-warning">Read More Blogs</a>
						</div>
					</div>
				</div>
				
			</div>
			
			<!-- footer -->
			<footer>
				<div class="container">
					<!-- This theme comes under Creative Commons Attribution 4.0 Unported. So don't remove below link back -->
					<p class="copy-right">Copyright &copy; 2021 <a href="#">Your Site</a> | Designed By : <a href="http://www.indioweb.in/portfolio">IndioWeb</a>, All rights reserved. </p>
				</div>
			</footer>
		</div>		
		
		<!-- Javascript files -->
		<!-- jQuery -->
		<script src="js/jquery.js"></script>
		<!-- Bootstrap JS -->
		<script src="js/bootstrap.min.js"></script>
		<!-- Respond JS for IE8 -->
		<script src="js/respond.min.js"></script>
		<!-- HTML5 Support for IE -->
		<script src="js/html5shiv.js"></script>
		<!-- Custom JS -->
		<script src="js/custom.js"></script>
	</body>	
</html>