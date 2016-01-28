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
                 <link rel="shortcut icon" href="images/favicon.ico" />
		<link rel="stylesheet" href="assets/css/bootstrap.min.css">
		<link rel="stylesheet" href="assets/css/ionicons.min.css">
		<link rel="stylesheet" href="assets/css/owl.carousel.css">
		<link rel="stylesheet" href="assets/css/owl.theme.css">
	    <link rel="stylesheet" href="assets/css/main.css">
	    <link rel="stylesheet" href="assets/css/one-page.css">
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
    
    	<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.5&appId=737339693065621";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>


<!-- Home -->
	<section class="header" id="header">
		
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
                                            <li class="active"><a href="home.php">home</a></li>
						<li><a href="about.php">about us</a></li>
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
		<div class="container">
			<div class="header-table">
				<div class="header-wrapper">
					<h1 class="header-title">
						COSMY MARKETPLACE
					</h1>
					<p class="header-subtitle">
						FALL 2015
					</p>
				</div> <!-- /.header-wrapper -->
			</div>
		</div> <!-- /.container -->
	</section> <!-- /#header -->
	

<!-- Portfolio -->
	<section class="portfolio" id="portfolio">
		<div class="container section-wrapper">
			<h2 class="section-title black">
				websites
			</h2> <!-- /.section-title -->
			<div class="underline purple"></div>
			<div class="row">
				<div class="col-sm-4 col-xs-6">
					<div class="portfolio-item">
						<div class="portfolio-img">
							<img src="assets/images/yospartans.JPG" alt="yospartans.com" class="port-item">
							<div class="portfolio-img-hover">
								<a href="http://yospartans.com/"><img src="assets/images/plus.png" alt="plus" class="plus"></a>
							</div> <!-- /.portfolio-img-hover -->
						</div> <!-- /.portfolio-img -->
						<div class="portfolio-item-details">
							<div class="portfolio-item-name">
								YoSpartans <br><small>Where Spartans Resides</small>
							</div> <!-- /.portfolio-item-name -->
							<div class="port-heart">
								<i class="ion-ios-heart-outline"></i> 564
							</div> <!-- /.port-heart -->
						</div> <!-- /.portfolio-item-details -->
					</div> <!-- /.portfolio-item -->
				</div> <!-- /.col-md-4 -->
				<div class="col-sm-4 col-xs-6">
					<div class="portfolio-item">
						<div class="portfolio-img">
                                                    <img src="assets/images/cbigsky.JPG" alt="cbigsky.com" class="port-item">
							<div class="portfolio-img-hover">
								<a href="http://cbigsky.com/home.php"><img src="assets/images/plus.png" alt="plus" class="plus"></a>
							</div> <!-- /.portfolio-img-hover -->
						</div> <!-- /.portfolio-img -->
						<div class="portfolio-item-details">
							<div class="portfolio-item-name">
								cBigSky <br><small>Your personal adventure in Luxury Timepieces</small>
							</div> <!-- /.portfolio-item-name -->
							<div class="port-heart">
								<i class="ion-ios-heart-outline"></i> 564
							</div> <!-- /.port-heart -->
						</div> <!-- /.portfolio-item-details -->
					</div> <!-- /.portfolio-item -->
				</div> <!-- /.col-md-4 -->
				<div class="col-sm-4 col-xs-6">
					<div class="portfolio-item">
						<div class="portfolio-img">
							<img src="assets/images/yogiopticans.JPG" alt="yogiopticans.com" class="port-item">
							<div class="portfolio-img-hover">
                                                            <a href="http://yogiopticans.com/"><img src="assets/images/plus.png" alt="plus" class="plus"></a>
							</div> <!-- /.portfolio-img-hover -->
						</div> <!-- /.portfolio-img -->
						<div class="portfolio-item-details">
							<div class="portfolio-item-name">
								Yogi Opticians <br><small>Beacuse your Eyes matters a lot</small>
							</div> <!-- /.portfolio-item-name -->
							<div class="port-heart">
								<i class="ion-ios-heart-outline"></i> 564
							</div> <!-- /.port-heart -->
						</div> <!-- /.portfolio-item-details -->
					</div> <!-- /.portfolio-item -->
				</div> <!-- /.col-md-4 -->
				<div class="col-sm-4 col-xs-6">
					<div class="portfolio-item">
						<div class="portfolio-img">
                                                    <img src="assets/images/chen.JPG" alt="chenyuwu.com" class="port-item">
							<div class="portfolio-img-hover">
								<a href="http://www.chenyuwu.com/"><img src="assets/images/plus.png" alt="plus" class="plus"></a>
							</div> <!-- /.portfolio-img-hover -->
						</div> <!-- /.portfolio-img -->
						<div class="portfolio-item-details">
							<div class="portfolio-item-name">
								Trader Chen's<br><small>We provide lots of organic and high quality foods and ingredients!.</small>
							</div> <!-- /.portfolio-item-name -->
							<div class="port-heart">
								<i class="ion-ios-heart-outline"></i> 564
							</div> <!-- /.port-heart -->
						</div> <!-- /.portfolio-item-details -->
					</div> <!-- /.portfolio-item -->
				</div> <!-- /.col-md-4 -->
				<div class="col-sm-4 col-xs-6">
					<div class="portfolio-item">
						<div class="portfolio-img">
                                                    <img src="assets/images/ojaskale.JPG" alt="port-5" class="port-item">
							<div class="portfolio-img-hover">
								<a href="http://www.ojaskale.com/learninstitute/"><img src="assets/images/plus.png" alt="plus" class="plus"></a>
							</div> <!-- /.portfolio-img-hover -->
						</div> <!-- /.portfolio-img -->
						<div class="portfolio-item-details">
							<div class="portfolio-item-name">
								"LEARN IT" Private School<br><small>We teach you all the Subjects.</small>
							</div> <!-- /.portfolio-item-name -->
							<div class="port-heart">
								<i class="ion-ios-heart-outline"></i> 564
							</div> <!-- /.port-heart -->
						</div> <!-- /.portfolio-item-details -->
					</div> <!-- /.portfolio-item -->
				</div> <!-- /.col-md-4 -->
				
			</div> <!-- /.row -->
		</div> <!-- /.container -->
	</section> <!-- /.portfolio -->        
        
<!-- Twitter Feed -->
	<section class="twitter-feed purple">
		<div class="container section-wrapper">
			<div class="section-title">
				facebook page
			</div> <!-- /.section-title -->
			<div class="underline white"></div>
			
				
				<div class="item">
					<div class="fb-page" data-href="https://www.facebook.com/cosmyMarket/?skip_nax_wizard=true" data-width="400" data-height="400" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true" data-show-posts="true"><div class="fb-xfbml-parse-ignore"><blockquote cite="https://www.facebook.com/cosmyMarket/?skip_nax_wizard=true"><a href="https://www.facebook.com/cosmyMarket/?skip_nax_wizard=true">COSMY Marketplace</a></blockquote></div></div>
				</div> <!-- /.item -->
				
			
		</div> <!-- /.container -->
	</section> <!-- /.twitter-feed -->





<!-- Note -->
<section class="note purple">
		<div class="container section-wrapper text-center">
			<p class="quote">
				“When you’re a carpenter making a beautiful chest of drawers, you’re not going to use a piece of plywood on the back, even though it faces the wall and nobody will see it. You’ll know it’s there, so you’re going to use a beautiful piece of wood on the back. For you to sleep well at night, the aesthetic, the quality, has to be carried all the way through.”
			</p> <!-- /.quote -->
			<div class="quoter">Steve Jobs</div>
		</div> <!-- /.container -->
	</section> <!-- /.note -->

<!-- Footer -->
	<footer>
		<div class="container">
			<div class="row">
				<div class="col-sm-4">
					<div class="copy">
						FALL 2015 COSMY
					</div>
				</div>
				<div class="col-sm-4 text-center">
					<div class="social-icon">
						<a href="#">
							<div class="icon fb">
								<i class="ion-social-facebook"></i>
							</div>
						</a>
						<a href="https://twitter.com/share">
<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');</script>							<div class="icon twitter">
								<i class="ion-social-twitter"></i>
							</div>
						</a>
						<a href="#">
							<div class="icon google">
								<i class="ion-social-googleplus"></i>
							</div>
						</a>
						<a href="#">
							<div class="icon rss">
								<i class="ion-social-rss"></i>
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