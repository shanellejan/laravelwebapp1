<?php
session_start();
require "libs/DbConnect.php";

$id = $_POST['temp_id'];
$new_quantity = $_POST['varQuantity'];
$new_totPrice = $_POST['varProdPrice'] * $new_quantity;
$update = "UPDATE temp 
		   SET quantity = '".$new_quantity."', total_price = '".$new_totPrice."'
		   WHERE temp_id = '".$id."'";

mysql_query($update);

//back to return url
$return_url = (isset($_POST["return_url"]))?urldecode($_POST["return_url"]):''; //return url
header('location:view_cart.php');

?>