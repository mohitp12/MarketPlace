<?php

$db = new mysqli('<server_name>', '<db_username>', '<password>', '<db_name>');

if(!$db){
    echo $db->error;
}



$product = null;

if (isset($_GET['id'])){
   
    $id = (int)$_GET['id'];
    $product = $db->query("SELECT products.id, products.product_name, products.product_price, AVG(product_rating.rating_value) AS rating FROM products LEFT JOIN product_rating ON products.id = product_rating.product_id WHERE products.id = {$id}")->fetch_object();
    
   
}




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
            
            
              <!-- Bootstrap -->
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
    
    <!-- Font Awesome -->
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


<!-- Portfolio -->
	<section class="portfolio" id="portfolio">
		<div class="container section-wrapper">
			<h2 class="section-title black">
				PRODUCT
			</h2> <!-- /.section-title -->
			<div class="underline purple"></div>
			<div class="row">
				<div class="col-sm-6 col-xs-8">
					<div class="portfolio-item">
						<div class="portfolio-img">
							<img src="assets/images/p<?php echo $product->id; ?>.jpg" alt="port-1" class="port-item">
							<div class="portfolio-img-hover">
								<a href="#"><img src="assets/images/plus.png" alt="plus" class="plus"></a>
							</div> <!-- /.portfolio-img-hover -->
						</div> <!-- /.portfolio-img -->
                                                
						
					</div> <!-- /.portfolio-item -->
				</div> <!-- /.col-md-4 -->
				<div class="col-sm-6 col-xs-8">
					<div class="portfolio-item">
                                            <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
                                            <div class="product-inner">
                                                <h2><?php echo $product->product_name;  ?></h2>
                                                <ins><?php echo $product->product_price;  ?></ins>
                                                    <div class="rating-chooser">
                                                        
                                                          <p> Avg. Rating: <?php echo round($product->rating); ?>/5</p>   
                                                        
                                                           <?php if (round($product->rating) == 5): ?>
                                                         <div class="rating-wrap-post" >
                                                             <i class="fa fa-star" style="color: #FFD700;"></i>
                                                             <i class="fa fa-star" style="color: #FFD700;"></i>
                                                             <i class="fa fa-star" style="color: #FFD700;"></i>
                                                             <i class="fa fa-star" style="color: #FFD700;"></i>
                                                             <i class="fa fa-star" style="color: #FFD700;"></i>
                                                        </div>
                                                         <?php endif; ?>
                                                         <?php if (round($product->rating) == 4): ?>
                                                         <div class="rating-wrap-post">
                                                             <i class="fa fa-star" style="color: #FFD700;"></i>
                                                             <i class="fa fa-star" style="color: #FFD700;"></i>
                                                             <i class="fa fa-star" style="color: #FFD700;"></i>
                                                             <i class="fa fa-star" style="color: #FFD700;"></i>
                                                             <i class="fa fa-star" ></i>
                                                        </div>
                                                         <?php endif; ?>
                                                         <?php if (round($product->rating) == 3): ?>
                                                         <div class="rating-wrap-post">
                                                             <i class="fa fa-star" style="color: #FFD700;"></i>
                                                             <i class="fa fa-star" style="color: #FFD700;"></i>
                                                             <i class="fa fa-star" style="color: #FFD700;"></i>
                                                             <i class="fa fa-star" ></i>
                                                             <i class="fa fa-star" ></i>
                                                        </div>
                                                         <?php endif; ?>
                                                         <?php if (round($product->rating) == 2): ?>
                                                         <div class="rating-wrap-post">
                                                            <i class="fa fa-star" style="color: #FFD700;"></i>
                                                            <i class="fa fa-star" style="color: #FFD700;"></i>
                                                            <i class="fa fa-star" ></i>
                                                            <i class="fa fa-star" ></i>
                                                            <i class="fa fa-star" ></i>
                                                        </div>
                                                         <?php endif; ?>
                                                         <?php if (round($product->rating) == 1): ?>
                                                         <div class="rating-wrap-post">
                                                             <i class="fa fa-star" style="color: #FFD700;"></i>
                                                             <i class="fa fa-star" ></i>
                                                             <i class="fa fa-star" ></i>
                                                             <i class="fa fa-star" ></i>
                                                             <i class="fa fa-star" ></i>
                                                        </div>
                                                         <?php endif; ?>
                                                         <?php if (round($product->rating) == 0): ?>
                                                         <div class="rating-wrap-post">
                                                            <i class="fa fa-star" ></i>
                                                            <i class="fa fa-star" ></i>
                                                            <i class="fa fa-star" ></i>
                                                            <i class="fa fa-star" ></i>
                                                            <i class="fa fa-star" ></i>
                                                            
                                                        </div>
                                                         <?php endif; ?>
                                                    </div>
                                                    <div class="tab-content">
                                                        <div role="tabpanel" >
                                                            <h4><strong>Rate the Product</strong></h4>
                                                            <div class="submit-review" >
                                                                <div class="rating">
                                                             <input type="radio" id="star1" name="rating" value="1" onclick="redirect5()"/><label class = "full" for="star1" title="Awesome - 5 stars" ></label>       
                                                            <input type="radio" id="star2" name="rating" value="2" onclick="redirect4()"/><label class = "full" for="star2" title="Pretty good - 4 stars" ></label>
                                                             <input type="radio" id="star3" name="rating" value="3" onclick="redirect3()"/><label class = "full" for="star3" title="Meh - 3 stars"></label>
                                                            <input type="radio" id="star4" name="rating" value="4" onclick="redirect2()"/><label class = "full" for="star4" title="Kinda bad - 2 stars"></label>
                                                             <input type="radio" id="star5" name="rating" value="5" onclick="redirect1()"/><label class = "full" for="star5" title="Sucks big time - 1 star"></label>        
                                                            
                                                            
                                                            
                                                                
                                                            
                                                            
                                                            
                                                            
                                                            
                                                            <script type="text/javascript">
        
                                                                    function redirect1() {
                                                                       window.location="http://www.cosmy.yospartans.com/rating.php?product=<?php echo $product->id; ?>&rating=1";
                                                                    }
                                                                    
                                                                    function redirect2() {
                                                                       window.location="http://www.cosmy.yospartans.com/rating.php?product=<?php echo $product->id; ?>&rating=2";
                                                                    }
                                                                    
                                                                    function redirect3() {
                                                                       window.location="http://www.cosmy.yospartans.com/rating.php?product=<?php echo $product->id; ?>&rating=3";
                                                                    }
                                                                    
                                                                    function redirect4() {
                                                                       window.location="http://www.cosmy.yospartans.com/rating.php?product=<?php echo $product->id; ?>&rating=4";
                                                                    }
                                                                    
                                                                    function redirect5() {
                                                                       window.location="http://www.cosmy.yospartans.com/rating.php?product=<?php echo $product->id; ?>&rating=5";
                                                                    }

                                                              </script>
                                                        </div>
                                                                <form action="portfolio.php" method="post">
                                                    <br>
                                                    <p><label for="name">Name</label> <input name="name" type="text" style="margin-top: 10px"></p>
                                                    <p><label for="email"  style="margin-left : 110px;">Email</label> <input name="email" type="email"></p>
                                                   
                                                    <p><label for="review">Your review</label> </p><p><textarea name="review" id="review" cols="60" rows="10"></textarea></p>
                                                    <p><input type="submit" value="Submit" name="submit"></p>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                                    
                                                    
                                                    
                                                 </div>
						
					</div> <!-- /.portfolio-item -->
				</div> <!-- /.col-md-4 -->
				
				
			</div> <!-- /.row -->
                        <section class="portfolio-header" id="header">
		
                            <nav class="navbar navbar-default _navbar-fixed-top" style="align-content: center; ">
                         <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1" >
                             <ul class="nav navbar-nav navbar-right">
                                            <li class="active"><a href="product.php">back</a></li>
                                        </ul>
                        </div><!-- /.container -->
		</nav>
	</section> <!-- /#header -->
                        
		</div> <!-- /.container -->
	</section> <!-- /.portfolio -->

        
        <?php

if(isset($_POST['submit']))
{    
    extract($_POST);
    $to      = 'mohit.patel@sjsu.edu';
    $subject = 'product review';
    $product = $product->product_name;
    $message = "Review of " .$product->product_name. " is as ".$review;
   
    $headers = 'From:'. $name . "\r\n" .
        'Reply-To:'.$email . "\r\n" .
        'X-Mailer: PHP/' . phpversion();

    mail($to, $subject, $message, $headers);

    echo 'Email Sent.';
}

?>
        
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

