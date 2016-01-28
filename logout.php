<?php
session_start();
if(session_destroy()) // Destroying All Sessions
{
header("Location: http://cosmy.yospartans.com/home.php"); // Redirecting To Home Page
}
?>