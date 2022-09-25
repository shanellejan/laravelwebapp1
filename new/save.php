<?php
session_start();
?>
<html>
<body>
<?php
require "libs/DbConnect.php";


if(isset($_POST['btnAddToCart']))
{
	$prod_id = $_POST['varProdId'];
	$prod_code = $_POST['varProdCode'];
	$description = $_POST['varDescription'];
	$image = $_POST['image_path'];
	$price = $_POST['varPrice'];
	$quantity = $_POST['varQuantity'];
	$total_price = $price * $quantity;
	
	$check_repeat = "SELECT prod_id, quantity FROM temp WHERE prod_id = '".$prod_id."'";
	$result = mysql_query($check_repeat);
	$row = mysql_fetch_array($result);
	$new_quantity =  $row['quantity'] + $quantity;
	if($row['prod_id'] == $prod_id)
	{
			$update = "UPDATE temp
					   SET quantity = '".$new_quantity."'
					   WHERE prod_id = '".$prod_id."'";
			mysql_query($update);
			header("location: view_cart.php");	
	}
	else
	{
	
			$insert = "INSERT INTO temp(prod_id,prod_code,description,price,quantity,total_price,image_path) VALUES('".$prod_id."','".$prod_code."','".$description."','".$price."','".$quantity."','".$total_price."','".$image."')";
			
			mysql_query($insert);	
			header("location: gallery.php");
	}
	
	
	
		
		
}

?>
<br><br><br><br><a href = "index.php">Click HERE to log-in</a>
</body>
</html>
