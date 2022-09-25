<?php
session_start();
require "libs/DbConnect.php";
// get the product id
$id = $_GET['id'];

$remove = "DELETE FROM temp WHERE temp_id = '".$id."'";
mysql_query($remove);

header('Location: view_cart.php');
?>