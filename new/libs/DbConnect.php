<?php
$dbhost = "localhost";
$dbuser = "root";
$dbpassword = "";
$dbdatabase = "fashion";
$con=mysql_connect("localhost","root","") or die(mysql_error());
mysql_select_db("fashionlib",$con) or die (mysql_error());
?>