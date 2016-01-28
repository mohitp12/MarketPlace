<!DOCTYPE html>
<html lang="en">

    <head>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Market Place</title>

        <!-- CSS -->
        <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Roboto:400,100,300,500">
        <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="assets/font-awesome/css/font-awesome.min.css">
		<link rel="stylesheet" href="assets/css/form-elements.css">
        <link rel="stylesheet" href="assets/css/style.css">

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
            <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->

        <!-- Favicon and touch icons -->
        <link rel="shortcut icon" href="assets/ico/favicon.png">
        <link rel="apple-touch-icon-precomposed" sizes="144x144" href="assets/ico/apple-touch-icon-144-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="114x114" href="assets/ico/apple-touch-icon-114-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="72x72" href="assets/ico/apple-touch-icon-72-precomposed.png">
        <link rel="apple-touch-icon-precomposed" href="assets/ico/apple-touch-icon-57-precomposed.png">

    </head>

    <body>
    <!-- Load the Facebook JavaScript SDK -->
    <div id="fb-root"></div>
    <script src="//connect.facebook.net/en_US/all.js"></script>
    
    <script type="text/javascript">
      
      // Initialize the Facebook JavaScript SDK
      FB.init({
        appId: '<application ID from the facebook>',
        xfbml: true,
        status: true,
        cookie: true,
      });
      
      // Check if the current user is logged in and has authorized the app
      FB.getLoginStatus(checkLoginStatus);
      
      // Login in the current user via Facebook and ask for email permission
      function authUser() {
        FB.login(checkLoginStatus, {scope:'email'});
         alert('Your name is ' + response.email)
      }
	  
      function getinfo()
      { FB.login(function(response) {
    if (response.authResponse) {
     console.log('Welcome!  Fetching your information.... ');
     console.log(response.email);
       FB.api('/me', { locale: 'en_US', fields: 'name, email, id' }, function(response) {
     console.log(response.email);
document.getElementById("email").value = response.email;
document.getElementById("email2").value = response.email;

          document.getElementById('loginButton').style.display = 'none';
        document.getElementById("name").value = response.name;

});
    }
});}
      // Check the result of the user status and display login button if necessary
    </script>

        <!-- Top content -->
        <div class="top-content">
        	
            <div class="inner-bg">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-8 col-sm-offset-2 text">
                            <h1>Market Place <br> <strong>New User</strong></h1>
                           
                        </div>
                    </div>
                   
                    <div class="row">
                        <div class="col-sm-6 col-sm-offset-3 form-box">
                        	<div class="form-top">
                        		<div class="form-top-left">

                        			<h3>New User</h3>
                            		<p>Enter your details to create page:</p>
                        		</div>
                        		<div class="form-top-right">
                        			<i class="fa fa-key"></i>
                        		</div>
                            </div>
                            <div class="form-bottom">
                                <form role="form" action="succ.php" method="post" class="login-form">
			                    	<div class="form-group">
			                    		<label class="sr-only" for="form-username">Name</label>
			                        	<input type="text" placeholder="Name..." name="name" class="form-username form-control" id="name">
			                        </div>
                                    <div class="form-group">
                                        <label class="sr-only" for="form-username">Address</label>
                                        <input type="text" name="adr" placeholder="Address..." class="form-username form-control" id="email">
                                    </div>
                                    <div class="form-group">
                                        <label class="sr-only" for="form-username">Username</label>
                                        <input type="text" name="usrname" placeholder="Username..." class="form-username form-control" id="email2">
                                    </div>
			                        <div class="form-group">
			                        	<label class="sr-only" for="form-password">Password</label>
			                        	<input type="password" name="password" placeholder="Password..." class="form-password form-control" id="password">
			                        </div>
			                        <button type="submit" class="btn">Create</button>
			                    </form>
                                               
                              
		                    </div>
                        </div>
                    </div>
                   
                  
                </div>
                    
                    <div class="row">
                        <div class="col-sm-6 col-sm-offset-3 social-login">
                        	<h3>...or login with:</h3>
                        	<div class="social-login-buttons">
<fb:login-button id="loginButton" class="btn btn-link-1 btn-link-1-facebook" scope="public_profile,email" onlogin="getinfo();">
                            </fb:login-button>	                        	
	                        	
                        	</div>
                        </div>
                    </div>
                </div>
            </div>
            
        </div>


        <!-- Javascript -->
        <script src="assets/js/jquery-1.11.1.min.js"></script>
        <script src="assets/bootstrap/js/bootstrap.min.js"></script>
        <script src="assets/js/jquery.backstretch.min.js"></script>
        <script src="assets/js/scripts.js"></script>
        
        <!--[if lt IE 10]>
            <script src="assets/js/placeholder.js"></script>
        <![endif]-->

    </body>

</html>
