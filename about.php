
<!DOCTYPE html>
<!--[if IE 7 ]><html class="ie ie7 lte9 lte8 lte7" lang="en-US"><![endif]-->
<!--[if IE 8]><html class="ie ie8 lte9 lte8" lang="en-US">	<![endif]-->
<!--[if IE 9]><html class="ie ie9 lte9" lang="en-US"><![endif]-->
<!--[if (gt IE 9)|!(IE)]><!-->
<html class="noIE" lang="en-US">
<!--<![endif]-->
	<head>
		<!-- meta -->
			<meta http-equiv="X-UA-Compatible" content="IE=edge">
			<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
			<meta name="viewport" content="width=device-width, initial-scale = 1.0, maximum-scale=1.0, user-scalable=no"/>
		<title>C O S M Y</title>

		<link rel="stylesheet" href="assets/css/bootstrap.min.css">
		<link rel="stylesheet" href="assets/css/ionicons.min.css">
		<link rel="stylesheet" href="assets/css/owl.carousel.css">
		<link rel="stylesheet" href="assets/css/owl.theme.css">
	    <link rel="stylesheet" href="assets/css/main.css">
	    <link rel="stylesheet" href="assets/css/section.css">
	    <link rel="stylesheet" href="assets/css/about.css">
	    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
			<!--[if lt IE 9]>
				<script src="assets/js/html5shiv.js"></script>
				<script src="assets/js/respond.js"></script>
			<![endif]-->

			<!--[if IE 8]>
		    	<script src="assets/js/selectivizr.js"></script>
		    <![endif]-->
	</head>
<body>
<!-- Home -->
	<section class="portfolio-header" id="header">
		
		<nav class="navbar navbar-default">
			<div class="container">
			<!-- Brand and toggle get grouped for better mobile display -->
				<div class="navbar-header">
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<a class="navbar-brand" href="home.php">COSMY</a>
				</div> <!-- /.navbar-header -->

		    <!-- Collect the nav links, forms, and other content for toggling -->
			    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
					<ul class="nav navbar-nav navbar-right">
                                            <li><a href="home.php">home</a></li>
						<li class="active"><a href="about.php">about us</a></li>
						<li><a href="product.php">products</a></li>
						<li><a href="contact.php">contact</a></li>
                                                <?php
                        session_start();
                        if (isset($_SESSION["market_session"]))
                        {
                            $tmp = $_SESSION["market_session"];
                            echo '<li><a href="profile.php">';
                            print_r($tmp);
                            echo '</a></li>';
                        }
                        else
                        {
                            echo '<li><a href="index.html">Log In</a></li>';
                        }
                ?>
					</ul> <!-- /.nav -->
			    </div><!-- /.navbar-collapse -->
		  	</div><!-- /.container -->
		</nav>
	</section> <!-- /#header -->


<!-- Section Background -->
	<section class="section-background">
		<div class="container">
			<ol class="breadcrumb">
                            <li><a href="home.php">Home</a></li>
				<li class="active">&nbsp;about us</li>
			</ol>
		</div> <!-- /.container -->
	</section> <!-- /.section-background -->


<!-- About Us -->
	<section class="about" id="about">
		<div class="container section-wrapper">
			<h2 class="section-title black">
				about us
			</h2> <!-- /.section-title -->
			<div class="underline purple"></div>	
			<div class="row">
				<div class="col-md-3 col-sm-6">
					<img src="assets/images/about-1.png" alt="about" class="about-img">
				</div> <!-- /.col-md-3 -->
				<div class="col-md-3 col-sm-6">
					<img src="assets/images/about-2.png" alt="about" class="about-img">
				</div> <!-- /.col-md-3 -->

				<div class="col-md-6 col-sm-12">
					<p class="about-detail">COSMY is the market place where various companies pitch their services/products for display.
We exhibit a variety of companies viz. “Yospartans” who are dealing in real estate. It offers you various places for living. “LEARN IT school” is the most famous school in California. It offers various subject with well known and best curriculum. “cBigSky” is a website where you can find some outstanding watches. With finest customer service, the cBigSky is one of the well known dealer in watches. “Traders Chan’s” is the place where you will find all the grocery items. One of the biggest grocery outlet chains in America is on our marketplace. “Yogiopticans” deals with spectacles & frames. It is one of the best quality dealers offering some top quality products on our marketplace.
					</p> <!-- /.about-detail -->
				</div> <!-- /.col-md-6 -->

			</div> <!-- /.row -->

			<div class="row">
			
				<div class="col-sm-4">
					<h3 class="section-item-title">
						we care
					</h3>
					
				</div>
				<div class="col-sm-4">
					<h3 class="section-item-title">
						we deliver
					</h3>
					
				</div>
				<div class="col-sm-4">
					<h3 class="section-item-title">
						we're creative
					</h3>
					
				</div>	
			</div> <!-- /.row -->

		</div> <!-- /.container -->
	</section> <!-- /.about -->


<!-- Our Team -->
	<section class="team">
		<div class="container section-wrapper">
			<h2 class="section-title black">
				our team
			</h2> <!-- /.section-title -->
			<div class="underline purple"></div>
			<div class="row">
				<div class="col-sm-3 col-xs-6">
					<div class="team-item">
						<img src="assets/images/team-1.png" alt="team-image" class="team-img">
						<h4 class="team-item-name">
							Mohit Patel
						</h4>
						<p class="team-item-id">
							founder
						</p>
					</div> <!-- /.team-item -->
				</div> <!-- /.col-md-3 -->

				<div class="col-sm-3 col-xs-6">
					<div class="team-item">
						<img src="assets/images/team-2.png" alt="team-image" class="team-img">
						<h4 class="team-item-name">
							Chen -Yu Wu 
						</h4>
						<p class="team-item-id">
							founder
						</p>
					</div> <!-- /.team-item -->
				</div> <!-- /.col-md-3 -->
				<div class="col-sm-3 col-xs-6">
					<div class="team-item">
						<img src="assets/images/team-3.png" alt="team-image" class="team-img">
						<h4 class="team-item-name">
							Ojas Kale
						</h4>
						<p class="team-item-id">
							founder
						</p>
					</div> <!-- /.team-item -->
				</div> <!-- /.col-md-3 -->
				<div class="col-sm-3 col-xs-6">
					<div class="team-item">
						<img src="assets/images/team-4.png" alt="team-image" class="team-img">
						<h4 class="team-item-name">
							Yogesh Chauhan
						</h4>
						<p class="team-item-id">
							founder
						</p>
					</div> <!-- /.team-item -->
				</div> <!-- /.col-md-3 -->
				<div class="col-sm-3 col-xs-6">
					<div class="team-item">
						<img src="assets/images/team-5.png" alt="team-image" class="team-img">
						<h4 class="team-item-name">
							Savan Thakkar
						</h4>
						<p class="team-item-id">
							founder
						</p>
					</div> <!-- /.team-item -->
				</div> <!-- /.col-md-3 -->
				
			</div> <!-- /.row -->
		</div> <!-- /.container -->
	</section> <!-- /.team -->



<!-- Footer -->
	<footer>
		<div class="container">
			<div class="row">
				<div class="col-sm-4">
					<div class="copy">
						Copyright &copy; 2015 COSMY Marketplace
					</div>
				</div>
				<div class="col-sm-4 text-center">
					<div class="social-icon">
						<a href="#">
							<div class="icon fb">
								<i class="ion-social-facebook"></i>
							</div>
						</a>
						<a href="#">
							<div class="icon twitter">
								<i class="ion-social-twitter"></i>
							</div>
						</a>
						<a href="#">
							<div class="icon google">
								<i class="ion-social-googleplus"></i>
							</div>
						</a>
						
					</div>		
				</div>
				
			</div> <!-- /.row -->
		</div> <!-- /.container -->
	</footer>
	


	<script src="assets/js/jquery-1.11.2.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/owl.carousel.min.js"></script>
    <script src="assets/js/contact.js"></script>
	<!-- // <script src="assets/js/smoothscroll.js"></script> -->
	<script src="assets/js/script.js"></script>


</body>
</html>