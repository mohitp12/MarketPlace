<?php



extract($_POST);

if(array_key_exists('lastvisited', $_COOKIE))
{
    $cookie = $_COOKIE['lastvisited'];
    $cookie =  unserialize($cookie);
}
else
{
    $cookie = array();
}

$cookie[] = $product;
$cookie = serialize($cookie);

setcookie('lastvisited', $cookie, time()+3600*60*24);




$db = new mysqli('<server_name>', '<db_username>', '<password>', '<db_name>');

if(!$db){
    die('Could not connect: ' . mysql_error());
}

$query = $db->query("SELECT * FROM products WHERE id = {$product}")->fetch_object();


header("Refresh:0 ; url=portfolio.php?id=".$query->id);



?>