<?php



$db = new mysqli('<server_name>', '<db_username>', '<password>', '<db_name>');

if(!$db){
    die('Could not connect: ' . mysql_error());
}



if (isset($_GET['product'], $_GET['rating'])){
   
    $product = (int)$_GET['product'];
    $rating = (int)$_GET['rating'];
    
    $exist = $db->query("SELECT id FROM products WHERE id = {$product}")->num_rows ? true : false;
    
    if($exist){
        $db->query("INSERT INTO product_rating (product_id, rating_value) VALUES ({$product},{$rating})");
    }
    
    header('Location: portfolio.php?id='.$product);
}

?>