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
	    <link rel="stylesheet" href="assets/css/contact.css">
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
						<li class="active"><a href="contact.php">contact</a></li>
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
				<li class="active">&nbsp;contact</li>
			</ol>
		</div> <!-- /.container -->
	</section> <!-- /.section-background -->


<!-- Contact with us -->
	<section class="contact section-wrapper" id="contact">
		<div class="container">
			<div class="row">
	            <div class="col-md-3 contact-item col-sm-6 col-xs-12">
	                <i class="ion-location"></i>
	                <h3>Address</h3>
	                <p class="contact">
	                    1 Washington Square,  <br>
	                    San Jose, CA 95112
	                </p>
	            </div>
	            <div class="col-md-3 contact-item col-sm-6 col-xs-12">
	                <i class="ion-ios-telephone"></i>
	                <h3>Phone</h3>
	                <p class="contact">
	                    Local:<a href="tel:+16692928548">669-292-8548</a> 
	                </p>
	            </div>
	            <div class="col-md-3 contact-item col-sm-6 col-xs-12">
	                <i class="ion-printer"></i>
	                <h3>Fax</h3>
	                <p class="contact">
	                    Office: 2148-287-8300 <br>
	                    Home: 2528-782-8200
	                </p>
	            </div>
	            <div class="col-md-3 contact-item col-sm-6 col-xs-12">
	                <i class="ion-ios-email"></i>
	                <h3>Email Address</h3>
	                <p class="contact">
	                    <a href="mailto:mohit.patel@sjsu.edu">info@cosmymarket.com</a> <br>
	                </p>
	            </div>


	        </div> <!-- /.row -->
                
                
                <iframe width="1100" height="450" frameborder="0" style="border:0"
src="https://www.google.com/maps/embed/v1/place?q=place_id:ChIJiXzQ6LvMj4ARGSXqy3Ga5bg&key=AIzaSyCO7cOqRNGgNmVrN-QmxqyXPkD-KC83oJ8" allowfullscreen></iframe>
                
                
                
                <form class="row form" action="contact.php" method="post">
                <h3>Leave A Message</h3>
                <div class="col-sm-4 col-xs-12 form-group">
                    <label class="sr-only">Name</label>
                    <input name="name" class="form-control" type="text" placeholder="First Name">
                </div> <!-- /.form-group -->
                <div class="col-sm-4 col-xs-12 form-group">
                    <label class="sr-only">Email</label>
                    <input name="email" class="form-control" type="email" placeholder="Email address">
                </div> <!-- /.form-group -->
                <div class="col-sm-4 col-xs-12 form-group">
                    <label class="sr-only">Website</label>
                    <input name="website" class="form-control" type="text" placeholder="Your website">
                </div> <!-- /.form-group -->
                <div class="row">
                    <div class="col-md-12 col-xs-12 form-group">
                        <label class="sr-only">Message</label>
                        <textarea class="message form-control" placeholder="Write message" name="message"></textarea>
                    </div> <!-- /.form-group -->
                    <input class="btn btn-sub" type="submit" value="Send Message" name="send">
                </div>
            </form> <!-- /.row -->
		</div> <!-- /.container -->
	</section> <!-- /.contact -->



<?php

if(isset($_POST['send']))
{    
    extract($_POST);
    $to      = 'mohit.patel@sjsu.edu';
    $subject = 'cosmy marketplace customer support';
    $message = $message;
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

        <!-- begin olark code -->
<script data-cfasync="false" type='text/javascript'>/*<![CDATA[*/window.olark||(function(c){var f=window,d=document,l=f.location.protocol=="https:"?"https:":"http:",z=c.name,r="load";var nt=function(){
f[z]=function(){
(a.s=a.s||[]).push(arguments)};var a=f[z]._={
},q=c.methods.length;while(q--){(function(n){f[z][n]=function(){
f[z]("call",n,arguments)}})(c.methods[q])}a.l=c.loader;a.i=nt;a.p={
0:+new Date};a.P=function(u){
a.p[u]=new Date-a.p[0]};function s(){
a.P(r);f[z](r)}f.addEventListener?f.addEventListener(r,s,false):f.attachEvent("on"+r,s);var ld=function(){function p(hd){
hd="head";return["<",hd,"></",hd,"><",i,' onl' + 'oad="var d=',g,";d.getElementsByTagName('head')[0].",j,"(d.",h,"('script')).",k,"='",l,"//",a.l,"'",'"',"></",i,">"].join("")}var i="body",m=d[i];if(!m){
return setTimeout(ld,100)}a.P(1);var j="appendChild",h="createElement",k="src",n=d[h]("div"),v=n[j](d[h](z)),b=d[h]("iframe"),g="document",e="domain",o;n.style.display="none";m.insertBefore(n,m.firstChild).id=z;b.frameBorder="0";b.id=z+"-loader";if(/MSIE[ ]+6/.test(navigator.userAgent)){
b.src="javascript:false"}b.allowTransparency="true";v[j](b);try{
b.contentWindow[g].open()}catch(w){
c[e]=d[e];o="javascript:var d="+g+".open();d.domain='"+d.domain+"';";b[k]=o+"void(0);"}try{
var t=b.contentWindow[g];t.write(p());t.close()}catch(x){
b[k]=o+'d.write("'+p().replace(/"/g,String.fromCharCode(92)+'"')+'");d.close();'}a.P(2)};ld()};nt()})({
loader: "static.olark.com/jsclient/loader0.js",name:"olark",methods:["configure","extend","declare","identify"]});
/* custom configuration goes here (www.olark.com/documentation) */
olark.identify('9082-416-10-1679');/*]]>*/</script><noscript><a href="https://www.olark.com/site/9082-416-10-1679/contact" title="Contact us" target="_blank">Questions? Feedback?</a> powered by <a href="http://www.olark.com?welcome" title="Olark live chat software">Olark live chat software</a></noscript>
<!-- end olark code -->

</body>
</html>