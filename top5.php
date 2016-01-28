<?php

$db = new mysqli('<server_name>', '<db_username>', '<password>', '<db_name>');

if(!$db){
    die('Could not connect: ' . mysql_error());
}
    
    $query = $db->query("SELECT AVG(product_rating.rating_value) AS rating, products.id, products.product_name, products.product_price FROM products LEFT JOIN product_rating ON products.id = product_rating.product_id GROUP BY products.id");


$products = array();

while($row = $query->fetch_object()){
    $products [] = $row;
   
}
arsort($products);
$products = array_slice($products,0,5,true);

//print_r($products);

?>

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
	    <link rel="stylesheet" href="assets/css/portfolio.css">
            <link rel="stylesheet" href="assets/css/contact.css">
            
            <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
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
					<a class="navbar-brand" href="#">COSMY</a>
				</div> <!-- /.navbar-header -->

		    <!-- Collect the nav links, forms, and other content for toggling -->
			    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
					<ul class="nav navbar-nav navbar-right">
                                            <li><a href="home.php">home</a></li>
						<li><a href="about.php">about us</a></li>
						<li  class="active"><a href="product.php">products</a></li>
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
		  	</div><!-- /.container -->
		</nav>
	</section> <!-- /#header -->


<!-- Section Background -->
	<section class="section-background">
		<div class="container">
			<ol class="breadcrumb">
				<li><a href="home.php">Home</a></li>
				<li class="active">&nbsp;product</li>
			</ol>
		</div> <!-- /.container -->
	</section> <!-- /.section-background -->

        <a href="top5.php" style="text-decoration: none"><h2 class="section-title black">
				Top Rated
            </h2> <!-- /.section-title --></a>
			<div class="underline purple"></div>
                        
                      <!-- /.section-title -->
			
<!-- Portfolio -->

	<section class="portfolio" id="portfolio">
            <form action="setcookie.php" method="post">
                <div class="container section-wrapper">
		
			<div class="row">
                            <?php foreach($products as $key => $value): ?>
               
                            
				<div class="col-sm-4 col-xs-6">
					<div class="portfolio-item">
						<div class="portfolio-img">
                                                    <img src="assets/images/p<?php echo $value->id;; ?>.jpg"  style="width: 300px; height: 350px;" alt="port-1" class="port-item">
							<div class="portfolio-img-hover">
								<a href="portfolio.php?id=<?php echo $value->id;; ?>"><img src="assets/images/plus.png" alt="plus" class="plus"></a>
							</div> <!-- /.portfolio-img-hover -->
						</div> <!-- /.portfolio-img -->
						<div class="portfolio-item-details">
							<div class="portfolio-item-name">
								<?php echo $product->product_name;  ?> <br><div style="margin-top: 3px"><small><?php echo $value->product_price;  ?></small></div>
							</div> <!-- /.portfolio-item-name -->
							 
                                                        <div class="rating-chooser">
                                                        
                                                          <p> Avg. Rating: <?php echo round($value->rating); ?>/5</p>   
                                                        
                                                           <?php if (round($value->rating) == 5): ?>
                                                         <div class="rating-wrap-post" >
                                                             <i class="fa fa-star" style="color: #FFD700;"></i>
                                                             <i class="fa fa-star" style="color: #FFD700;"></i>
                                                             <i class="fa fa-star" style="color: #FFD700;"></i>
                                                             <i class="fa fa-star" style="color: #FFD700;"></i>
                                                             <i class="fa fa-star" style="color: #FFD700;"></i>
                                                        </div>
                                                         <?php endif; ?>
                                                         <?php if (round($value->rating) == 4): ?>
                                                         <div class="rating-wrap-post">
                                                             <i class="fa fa-star" style="color: #FFD700;"></i>
                                                             <i class="fa fa-star" style="color: #FFD700;"></i>
                                                             <i class="fa fa-star" style="color: #FFD700;"></i>
                                                             <i class="fa fa-star" style="color: #FFD700;"></i>
                                                             <i class="fa fa-star" ></i>
                                                        </div>
                                                         <?php endif; ?>
                                                         <?php if (round($value->rating) == 3): ?>
                                                         <div class="rating-wrap-post">
                                                             <i class="fa fa-star" style="color: #FFD700;"></i>
                                                             <i class="fa fa-star" style="color: #FFD700;"></i>
                                                             <i class="fa fa-star" style="color: #FFD700;"></i>
                                                             <i class="fa fa-star" ></i>
                                                             <i class="fa fa-star" ></i>
                                                        </div>
                                                         <?php endif; ?>
                                                         <?php if (round($value->rating) == 2): ?>
                                                         <div class="rating-wrap-post">
                                                            <i class="fa fa-star" style="color: #FFD700;"></i>
                                                            <i class="fa fa-star" style="color: #FFD700;"></i>
                                                            <i class="fa fa-star" ></i>
                                                            <i class="fa fa-star" ></i>
                                                            <i class="fa fa-star" ></i>
                                                        </div>
                                                         <?php endif; ?>
                                                         <?php if (round($value->rating) == 1): ?>
                                                         <div class="rating-wrap-post">
                                                             <i class="fa fa-star" style="color: #FFD700;"></i>
                                                             <i class="fa fa-star" ></i>
                                                             <i class="fa fa-star" ></i>
                                                             <i class="fa fa-star" ></i>
                                                             <i class="fa fa-star" ></i>
                                                        </div>
                                                         <?php endif; ?>
                                                         <?php if (round($value->rating) == 0): ?>
                                                         <div class="rating-wrap-post">
                                                            <i class="fa fa-star" ></i>
                                                            <i class="fa fa-star" ></i>
                                                            <i class="fa fa-star" ></i>
                                                            <i class="fa fa-star" ></i>
                                                            <i class="fa fa-star" ></i>
                                                            
                                                        </div>
                                                         <?php endif; ?>
                                                    </div>
                                                        
                                                        <div style="margin-top: 20px">
                                                            <button class="btn btn-sub" type="submit" name="product" value="<?php echo $value->id; ?>">View Details</button>
                                                        </div><!-- /.port-heart -->
						</div> <!-- /.portfolio-item-details -->
					</div> <!-- /.portfolio-item -->
				</div> 
                           
                             <?php endforeach; ?>
                            
			</div> <!-- /.row -->
                        
                </div>
                <!-- /.container --></form>

	</section> <!-- /.portfolio -->


<!-- Footer -->
	<footer>
		<div class="container">
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


