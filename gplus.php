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
                        if (isset($_SESSION["access_token"]))
                        {
                            $tmp = $_SESSION["market_session"];
                            echo '<li  class="active"><a href="http://cosmy.yospartans.com/logout.php">Log Out</a></li>';
                        }
                        else
                        {
                            echo '<li  class="active"><a href="http://cosmy.yospartans.com/index.html">Log In</a></li>';
                        }
                ?>
					</ul> <!-- /.nav -->
			    </div><!-- /.navbar-collapse -->
		  	</div><!-- /.container -->
		</nav>
	</section> <!-- /#header -->
        
        
<?php
session_start(); //session start
require_once ('libraries/Google/autoload.php');

//Insert your cient ID and secret 
//You can get it from : https://console.developers.google.com/
$client_id = 'ID given from the google Application'; 
$client_secret = 'API key';
$redirect_uri = '<Page to be redirected afterwards>';

//database
$db_username = "<>"; //Database Username
$db_password = "<>"; //Database Password
$host_name = "<>"; //Mysql Hostname
$db_name = "<>"; //Database Name

//incase of logout request, just unset the session var
if (isset($_GET['logout'])) {
  unset($_SESSION['access_token']);
}

/************************************************
  Make an API request on behalf of a user. In
  this case we need to have a valid OAuth 2.0
  token for the user, so we need to send them
  through a login flow. To do this we need some
  information from our API console project.
 ************************************************/
$client = new Google_Client();
$client->setClientId($client_id);
$client->setClientSecret($client_secret);
$client->setRedirectUri($redirect_uri);
$client->addScope("email");
$client->addScope("profile");

/************************************************
  When we create the service here, we pass the
  client to it. The client then queries the service
  for the required scopes, and uses that when
  generating the authentication URL later.
 ************************************************/
$service = new Google_Service_Oauth2($client);

/************************************************
  If we have a code back from the OAuth 2.0 flow,
  we need to exchange that with the authenticate()
  function. We store the resultant access token
  bundle in the session, and redirect to ourself.
*/
  
if (isset($_GET['code'])) 
{
  $client->authenticate($_GET['code']);
  $_SESSION['access_token'] = $client->getAccessToken();
  header('Location: ' . filter_var($redirect_uri, FILTER_SANITIZE_URL));
  exit;
}

/************************************************
  If we have an access token, we can make
  requests, else we generate an authentication URL.
 ************************************************/
if (isset($_SESSION['access_token']) && $_SESSION['access_token']) 
{
  $client->setAccessToken($_SESSION['access_token']);
}
else 
{
  $authUrl = $client->createAuthUrl();
}

//Display user info or display login url as per the info we have.
echo '<div style="margin:20px">';
if (isset($authUrl)){ 
    //show login url
    echo '<div align="center">';
    echo '<h3>COSMY MARKETPLACE LOGIN</h3>';
    echo '<div>Please click login button to connect to Google.</div>';
    echo '<a class="login" href="' . $authUrl . '"><img src="signin_button.png"/></a>';
    echo '</div>';
} else {
    $user = $service->userinfo->get(); //get user info 
    $_SESSION["market_session"] = $user->name;   

    // connect to database
    $mysqli = new mysqli($host_name, $db_username, $db_password, $db_name);
    if ($mysqli->connect_error) {
        die('Error : ('. $mysqli->connect_errno .') '. $mysqli->connect_error);
    }
    
    //check if user exist in database using COUNT
    $result = $mysqli->query("SELECT COUNT(google_id) as usercount FROM user WHERE google_id=$user->id");
    $user_count = $result->num_rows; //will return 0 if user doesn't exist
    //show user picture
    echo '<div class="container_12" style="width: 50%; margin: 0 auto; text-align: center;">';
   // echo '<img src="'.$user->picture.'" style="float: right;margin-top: 33px;" />';
    echo '</div>';
    echo ' <div class="container_12" id="profile" style="width: 50%; margin: 0 auto; text-align: center;">
    <h2>';
    if($user_count==1) //if user already exist change greeting text to "Welcome Back"
    {
        echo 'Welcome back '.$user->name.'! ';
    }
    else //else greeting text "Thanks for registering"
    { 
        echo 'Hi '.$user->name.', Thanks for Registering! ';
        $statement = $mysqli->prepare("INSERT INTO user (google_id, name, username, emailaddr, google_link, picture_link) VALUES (?,?,?,?,?,?)");
		$statement->bind_param('isssss', $user->id,  $user->name,  $user->email, $user->email, $user->link, $user->picture);
		$statement->execute();
		echo $mysqli->error;
    }
    echo '</b></h2></div>';
    //print user details
    echo '<pre>';
    //print_r($user);
    echo '</pre>';
}
echo '</div>';
?>
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


