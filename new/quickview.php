
<!DOCTYPE html>
<html>
<head>
	
	<title>Polly Lagyap - Products</title>
	<meta charset="UTF-8">
	<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
	<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
	
	

</head>
<body>
	<!-- Start Header-->
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
					<a href="home.php" title = "Home">Home</a>
				</li>
				<li class="selected">
					<a href="gallery.php" title= "Products">Products</a>
				</li>
				<li>
					<a href="customization.php" title= "Customization">Customization</a>
				</li>
				<li>
					<a href="designer.php" title= "The Designer">The Designer</a>
				</li>
				<li>
					<a href="contact.php" title = "Contact Us">Contact Us</a>
				</li>
			</ul>
			
	</div>
	<!--end header-->

	

<nav id = "side_nav_wrap">
			<ul>
			
			<li><a href="gallery.php">All</a></li>
			<li><a href="gowns.php">Gowns</a></li>
			<li><a href="cocktail.php">Cocktail Dresses</a></li>
			<li><a href="tuxedo.php">Tuxedo</a></li>
			<li><a href="barong.php">Barong</a></li>
			</ul>
</nav>
<!--sidebar-->
	


	
<!--sidebar-->		
<!--Products-->			
<div id="products-wrapper">

    <div class="products">
			  <?php 
			// this will make 'home', 'view products' and 'view cart' appear
			include 'Navigation.php' 					
			?>



			<?php
			// to prevent undefined index notice
			$action = isset($_GET['action']) ? $_GET['action'] : "";
			$name = isset($_GET['name']) ? $_GET['name'] : "";

					require "includes/connection.php";
					$id = $_GET['id'];
					$type = $_GET['type'];
					$query = "SELECT * FROM products WHERE id = '                                 ". $id .  "' AND type = '" . $type . "'";
					$result = mysql_query($query);

						if($result)
						{                        
								$row = mysql_fetch_array($result);
								  
									
									echo "<div class = 'product'>";
									echo "<form action = 'save.php' method = 'POST'>";	
									echo '<div class="product-content"><h3>'.$row["product_code"].'</h3>';
									echo "<div class='product-thumb'><img src = '".$row['image_path']."' width = 'auto' height = 'auto'>
										<input type = 'hidden' name = 'varProdId' value = '".$row['id']."'>";
									 echo '<div class="product-desc">'.'Color: '.$row["color_desc"].'<br>'.'Waistline : '.$row["size"].' in'.'<br>'.'Type: '.$row["type"].'</div>
									 <input type = "hidden" name = "varDescription" value = "'.$row["product_desc"].'">';
									echo '<div class="product-info">Price: P'.$row["price"].' | 
										Available: '.$row["available"].' | 	  
									QUANTITY <input style="color: black" type = "number" min = "1" max = "20" name = "varQuantity" value = "1">
									<br><br><input style="float: right" type = "submit" name = "btnAddToCart" value = "ADD TO CART" class = "btn3"><input type = "hidden" name = "varTotPrice" value = "'.$row["price"].'">
									<input type = "hidden" name = "varPrice" value = "'.$row["price"].'"
											  
												 
											 
										
						<br><br><br>';				
									echo 		 '</form>';
												
									echo "</div>";
								
						}

						// no products in the database
						else
						{
							echo "No products found.";
						}
					?>

 </div>
</div>
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


#header {
	background-color: black;
	height: 110px;
	padding: 26px 0 0;
	font-family: Segoe UI Light;
	width: 100%;
	position: relative;
	
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
	line-height: 80px;
	list-style: none;
	margin: 0;
	padding: 0;
*width: 345px; /** Needed for IE7 **/
}
#navigation li {
	float: left;
	margin: 0 10px;
	display: inline-block;
}
#navigation li:first-child {
	margin-left: 0;
}
#navigation li a {
	color: #FFFFFF;
	font-family: arial;
	font-size: 14px;
	padding: 15px 0;
	text-decoration: none;
	text-transform: uppercase;
}
#navigation li a:hover, #navigation li.selected a {
	color: cyan;
}

.content{
width:1133px;
height:618px;
background-color: white;

top:80px;


}

#footer{
  margin-top:400px;
  background-color:#636269;
  color:white;
  width:100%;
  height:60px;

  padding: 10px;
}
#footer p{
  padding:5px 0px 3px 0px;
  margin:0px;
  float: left;
  font-family: Segoe UI Light;
  font-size: 12px;
}
#products-wrapper {
	width: 1000px;
	margin-right: 100px;
	margin-left: 100px;
	font-family: Segoe UI Light;
	margin-top: 5%;
	
	
}
.products {
	width: 58%;
	float:left;
	margin-right: 50px;
	font-size: 21px;
	margin: 0px;
	padding: 0px;
	font: Arial;
	font-family: Segoe UI Light;
	
}
.product {
	margin-bottom: 50px;
	height: auto;
	background: black;
	padding: 15px;
	border: 1px solid #DDD;
	border-radius: 5px;
	font-family: calibri;
	font-size:12px;
	color:white;
	margin-left: 50px;
	
}
.product .product-thumb {
	float: left;
	height: auto;
	width: auto;
	margin-left: 10px;
}
.product .product-content{
	overflow:hidden;
	font-family: Segoe UI Light;
}
.product .product-content h3 {
	font-size: 18px;
	margin: 0px;
	padding: 0px;
	color: white;
	font-family: Segoe UI Light;
}
/*, avail, qty*/
.product .product-info {
	float: right;
	font-size: 14px;
	display: block;
	font-weight: bold;
	margin-top:10px;
	margin-left:120px;
	padding-top:auto;
	font-family: Segoe UI Light;
}

.shopping-cart{
	width: 60%;
	background: #F0F8FF;
	padding: 10px;
	margin-top: 5%;	
	margin-left: 30%;
	border: 1px solid #DDD;
	border-radius: 5px;
	float: right;
	color: black;

}



.check-out-txt{
	float:right;
}
.btn3 {
	background: white;
	color: black;
	display: block;
	height: 34px;
	line-height: 34px;
	width: 109px;
	border-radius: 5px;
	font-family: Segoe UI Light;
	
}
.btn3:hover {
	background: black;
	color: white;
	font-family: Segoe UI Light;
}
.bspan2 {
	background: black;
	display: inline-block;
	height: 34px;
	line-height: 34px;
	width: 115px;
	border-radius: 5px;
	font-family: Segoe UI Light;
	
	
}
.bspan {
	background: black;
	display: inline-block;
	height: 34px;
	line-height: 34px;
	width: 92px;
	border-radius: 5px;
	font-family: Segoe UI Light;
	
}

.qtySpinner {
		width: 36px !important;
		text-align: center !important;
		margin-right: 0 !important;
		margin-top: 6px;
		margin-left: 5px;
		float: left;
	}

#side_nav_wrap
{
	
	z-index:1;
}
#side_nav_wrap ul
{
	list-style-type:none;
	position:relative;
	width: 180px;
	height: 100px;
	float:left;
	margin:1px;
	margin-left: 38px;
	padding:5px;
	top:55px;
	background:transparent;
}
#side_nav_wrap ul a
{
	display:block;
	color:#504649;
	text-decoration:none;
	font-size:14px;
	line-height:32px;
	padding:auto;
	font-family:arial;	
}
#side_nav_wrap ul li
{
	position:relative;
	display:block;
	height: 30px;
	width: 190px;
	float:left;
	margin:auto;
	padding:auto;

}
#side_nav_wrap ul li :hover
{
	width: 178px;
	background: #C0C0C0;
	color:white;
	height: 30px;
}

#side_nav_wrap ul ul
{
	display:none;
	position:relative;
	top:-30px;
	left:190px;
	background:white;
	padding:0;
	width:200px;
	z-index:1;
}
#side_nav_wrap ul ul li
{
	position:relative;
	height: 30px;
	width:200px;
		z-index:1;
}
#side_nav_wrap ul ul a
{
	line-height:32px;
	color:#252528;
	position:relative;
	padding:0px 75px;
		z-index:1;
}
#side_nav_wrap ul li:hover > ul
{
	display:block;
	height:150px;
	position:relative;
	z-index:1;
}

</style>
