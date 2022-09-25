<?php
session_start();
	require "libs/DbConnect.php";

$rem = "DELETE FROM temp";
mysql_query($rem);

header('Location: view_cart.php');
?>