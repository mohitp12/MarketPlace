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
	    <link rel="stylesheet" href="assets/css/service.css">
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

		<nav class="navbar navbar-default _navbar-fixed-top">
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
						<li><a href="about.php">about us</a></li>
						<li><a href="product.php">products</a></li>
						<li><a href="contact.php">contact</a></li>
                                                <?php
                        session_start();
                        if (isset($_SESSION["market_session"]))
                        {
                            $tmp = $_SESSION["market_session"];
                            echo '<li  class="active"><a href="logout.php">';
                            print_r("LogOut");
                            echo '</a></li>';
                        }
                        else
                        {
                            echo '<li  class="active"><a href="index.html">Log In</a></li>';
                        }
                ?>
					</ul> <!-- /.nav -->
			    </div><!-- /.navbar-collapse -->
		  	</div><!-- /.container -->
		</nav>
	</section> <!-- /#header -->
        
       
       <div class="container_12" id="profile" style="width: 50%; margin: 0 auto; text-align: center;">
    <h2><b>Welcome Back  
        <?php session_start(); print_r($_SESSION["market_session"]); ?>
    </b></h2>
</div>
    
    <div class="container_12" style="width: 50%; margin: 0 auto; text-align: center;">
        <img scr="http://www.yospartans.com/images/profile.jpeg" alt="profile picture" width="300" height="300"/>
        <br>
        <br>
        <h2>Users</h2>
        <hr>
        <h4><a href="http://www.yospartans.com/insert.html#toregister">Insert information here</a>
        <br/>
        <a href="http://www.yospartans.com/fetch.html#toregister">Search the users over here!</a>
        <br/>
        <a href="http://www.yospartans.com/allin.php">Show all the users</a>
        <br/>
    </h4>
        
    </div> 
        
        
        
        
        <!-- Footer -->
        <footer style="bottom: 0px">
		
			<div class="row">
				<div class="col-sm-4">
					<div class="copy">
						FALL 2015 COSMY MARKETPLACE
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
						<a href="#">
							<div class="icon rss">
								<i class="ion-social-rss"></i>
							</div>
						</a>
					</div>		
				</div>
				
			</div> <!-- /.row -->
		
	</footer>
	


	<script src="assets/js/jquery-1.11.2.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/owl.carousel.min.js"></script>
    <script src="assets/js/contact.js"></script>
	<!-- // <script src="assets/js/smoothscroll.js"></script> -->
	<script src="assets/js/script.js"></script>


</body>
</html>