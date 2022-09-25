<!DOCTYPE>

<html>
<head>
	<title>Inventory</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
	<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>

</head>
<body>

	<!--Header-->
	<div id="header">
	
		<div>
		
		<?php
		
		session_start();
			if(isset($_SESSION['User']))
			{
				
				echo "<text style='float: right; color:white'/>WELCOME ".$_SESSION['User'];
				echo "<a href = 'view_cart.php'><text style='float: right; color:white'/>&nbsp; <img src='images/cart2.png'/>";
				echo "<span><a href = 'logout.php?logout=1'><text style='float: right; color:white'/>&nbsp; | Logout</a></span>";
				
			}
			else
			{
				echo "<a href = 'view_cart.php'><text style='float: right; color:white'/>&nbsp; <img src='images/cart2.png'/>";
				echo "<span><a href ='login.php'><text style='float: right; color:white'/> &nbsp;| Login</a>
				<a href = 'register.php'><text style='float: right; color:white'/> Sign Up  </a></span>";
			}
			
		?>
		</div>
			<div id="logo">
				<a href="home.php"><img src="images/banner.png" height="80" width="380" alt="LOGO"></a>
			</div>
			<ul id="navigation">
				<li>
					<a href="index2.php" title = "Home">Home</a>
				</li>
				<li>
					<a href="product.php" title= "Products">Products</a>
				</li>
				<li >
					<a href="delivery.php" title= "Customization">Delivery</a>
				</li>
				<li   class="selected">
					<a href="addinventory.php" title= "For Rent">Inventory</a>
				</li>
				<li>
					<a href="sales.php" title= "The Designer">Sales</a>
				</li>
				
			</ul>

		</div>
	</div>
	
	
	
	<!--contents-->
	
<div id="content">


<?php 

			if($_SESSION["User"]!="admin"){	
		?>
			<script type="text/javascript">
				window.location="home.php";
			</script>
		<?php } 
		?>
		
		 <form  class="addprodform" method="post" >

 <!--Main Body-->
 
	<h1>Products Inventory</h1>
	<select name = "no" style = "width: 90px; height: 35px; text-align: center;">
		<?php
		include_once("includes\connection.php");
			$get = mysql_query("SELECT * FROM products");
			
			while($row = mysql_fetch_array($get)){
		?>
			<option><?php echo $row['id']; ?></option>

		<?php } ?></select>
		<input type = "submit" name = "search" value = "Search" style = "background:black; color:white; width: 100px; height: 35px; text-align: center;"><br><br>
		<?php
			include_once("includes\connection.php");
			@$getNo = $_POST["no"];
			$get = mysql_query("SELECT * FROM products WHERE id = '$getNo'");
			$get2 = mysql_query("SELECT * FROM stocks_inventory WHERE Product_No = '$getNo'");
			
			$result = mysql_fetch_assoc($get);
			$result2 = mysql_fetch_assoc($get2);
			
			if(isset($_POST['search'])){
		?>
		<br><br>
		<span><?php echo $result['id']; ?></span><br>
		<span><?php echo $result['product_name']; ?></span><br>
		<span><?php echo $result['product_desc']; ?></span><br>
		<span>Stocks on Hand: <?php echo $result['available']; ?></span><br>
		<?php } ?>
		<br>
		
		<input type = "text" name = "New_Delivered_Stocks" placeholder = "New Delivered Stocks" style = "width: 300px; height: 35px; text-align: center;"><br><br>
		<input type = "text" name = "Price" placeholder = "Price" style = "width: 300px; height: 35px; text-align: center;"><br><br>
		<input type = "date" name = "Stock_Delivery_Date" placeholder = "Delivery Date" style = "width: 300px; height: 35px; text-align: center;"><br><br>
		
		<!--total stocks = new delivered stocks + stocks on hand-->
		<?php @$total_stocks = $_POST['New_Delivered_Stocks']+$result2['Stocks_on_Hand'];?> 
		<input type = "submit" name = "save" value = "Save to Inventory" style = "background:black; color:white; width: 200px; height: 35px; text-align: center;">
		
		<?php

			
			if(isset($_POST['save'])){
						$new = $_POST['New_Delivered_Stocks'];

						
				$sql = mysql_query("INSERT INTO products
				(New_Delivered_Stocks) VALUES
				('$new')");
				header("location:inventory.php");
			}
		?>
	</form>
	<!--End of Main Body-->
</div>

	
							
<!--footer-->
<div id="footer">
		<div id="footnote">
		<p>

		 FashionLibrary.com is managed by Polly Lagyap Fashion Library Philippines.<br>
                                © 2015 by 4G CICT-CSPC Philippines. All rights reserved.
		</p>
		</div>
</div>
</body> 
</html>
<style>

body{
background-image: url(images/image.jpg);
}

#header {
	background-color: black;
	height: 110px;
	padding: 26px 0 0;
	font-family: Segoe UI Light;
	width: 100%;
}
#header > div {
	width: auto;
	margin: 0 5px;
	padding: 0 10px;
	text-align: center;
	
}
/** Logo **/
#logo {
	float: left;
}
/** Navigation **/
#navigation {
	display: inline-block;
	position: relative;
	line-height: 80px;
	list-style: none;
	margin: 0;
	padding: 0;
*width: 345px; /** Needed for IE7 **/
}
#navigation li {
	float: left;
	margin: 0 15px;
}
#navigation li:first-child {
	margin-left: 0;
}
#navigation li a {
	color: #FFFFFF;
	font-family: Segoe UI Semibold;
	font-size: 14px;
	padding: 15px 0;
	text-decoration: none;
	text-transform: uppercase;
}
#navigation li a:hover, #navigation li.selected a {
	color: cyan;
}
.content{
position:absolute;
width:1000px;
height:618px;
left:200px;
top:100px;

}
.shopping-cart{
	width: 20%;
	background: #F0F8FF;
	padding: 10px;	
	margin-top: 50px;
	margin-left: 850px;
	border: 1px solid #DDD;
	border-radius: 5px;
	position: fixed;

}

.shopping-cart h2 {
	background: #E2E2E2;
	padding: 4px;
	font-size: 14px;
	margin: -10px -10px 5px;
	color: #707070;
}

.shopping-cart h3,.view-cart h3 {
	font-size: 12px;
	margin: 0px;
	padding: 0px;
}
.shopping-cart ol{
	padding: 1px 0px 0px 15px;
}
.shopping-cart .cart-itm, .view-cart .cart-itm{
	border-bottom: 1px solid #DDD;
	font-size: 11px;
	font-family: arial;
	margin-bottom: 5px;
	padding-bottom: 5px;
}
.shopping-cart .remove-itm, .view-cart .remove-itm{
	font-size: 14px;
	float: right;
	background: #D5D5D5;
	padding: 4px;
	line-height: 8px;
	border-radius: 3px;
}
.shopping-cart .remove-itm:hover, .view-cart .remove-itm:hover{
	background: #C4C4C4;
}
.shopping-cart .remove-itm a, .view-cart .remove-itm a{
	color: #888;
	text-shadow: 1px 1px 1px #ECECEC;
	text-decoration:none;
}

.check-out-txt{
	float:right;
}
#footer{
  margin-top:100%;
  background-color:#636269;
  color:white;
  font-family: Segoe UI Light;
  width:98.2%;
  height:30px;
  text-align:center;
  padding: 10px;
}
#footer p{
  padding:5px 0px 3px 0px;
  margin:0px;
  float: left;
  font-size: 12px;
}
.product-item 
{	
float:left; 
margin:10px;	
padding:5px;
}
.product-item div
{  position: relative;
float:justify;
font-family:calibri;
font-size:11pt;
top:7px;
left:12px

}
.product-item .product-thumb {
	float: left;
	height: auto;
	width: auto;
	margin-right: 10px;
}
.product-item.product-content{
	overflow:hidden;
	font-family: Segoe UI Light;
}
.product-item.product-content h3 {
	font-size: 11px;
	margin: 0px;
	padding: 0px;
	color: white;
	font-family: Segoe UI Light;
}
/*, avail, qty*/
.product-item.product-info {
	float: fixed right;
	font-size: 18px;
	display: block;
	font-weight: bold;
	margin-top:10px;
	padding-top:129px;
	font-family: Segoe UI Light;
}

.btn {
	background: black;
	color: white;
	display: inline-block;
	width: 60px;
	height: 40px;
	width: 100px;
	font-family: Segoe UI Light;
	margin: 3px;
	
	
}
.btn:hover {
	background: white;
	color: black;
	font-family: Segoe UI Light;
}
.addprodform {
	width: 800px;
	height: auto;
	margin-top: 60px;
	margin-left: 200px;
	margin-right: 200px;
	padding: 10px;
	background-color: #F8F8FF;
	border-radius: 4px;
	color: #000000;
	font-size: 15px;
	font-family: Segoe UI Light;
	font-weight: bolder;
	float: center;
}
#addprodform{
	border-radius: 3px;
	border: 6px;
}

.input-box {
		display: inline-block;
		float: none;
		margin: 25px 0;
		position: relative;
		width: 100%;
}

input[type="text"]{
	margin: 2px;
	width: 30%;
	height: 28px;
}

	
</style>
