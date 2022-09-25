
<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>cart-view</title>
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
					<a href="home.php" title = "Home">Home</a>
				</li>
				<li>
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
	</div>
	
	
	<!--contents-->
	
	<div id="content">
		
<!-- SHOPPING CART -->
		
<ul id="nav">

				<li class="selected">
					<a href="view_cart.php" title = "Review You Cart">Review Your Cart</a>
				</li>
				<li>
					<a href="#" title= "Delivey">DELIVERY</a>
				</li>
				
				
			</ul>

<body>

<div id="products-wrapper">
 <div class="shopping-cart">
<!--<h2>Review Your Cart</h2>	-->

<?php
	
		require "libs/DbConnect.php";

		$query = "SELECT * FROM measurement";				
		$result = mysql_query($query);

			if($result)
			{    
			
			  
				echo "<center><table>";
					echo "<tr>";
						echo "<th class='textAlignCenter'>Product</th>";
						echo "<th class='textAlignCenter'>&nbsp;&nbsp;&nbsp;Product ID</th>";
						echo "<th class='textAlignCenter'>&nbsp;&nbsp;&nbsp;Price</th>";
						echo "<th class='textAlignCenter'>&nbsp;&nbsp;&nbsp;Quantity</th>";
						echo "<th class='textAlignCenter'>&nbsp;&nbsp;&nbsp;Total Price</th>";
						
						
					echo "</tr>";
					
					//also compute for total price
					$totalPrice = 0;
					
						while($row = mysql_fetch_array($result))
							{						
							
							echo "
								   <tr ='#0099FF'>
								   <td class='textAlignCenter'>"."<img src = '".$row['image_path']."' width = '100px' height = '105px'></td>
								  <td class='textAlignCenter'>".$row['prod_id']."</td>
								  <td class='textAlignCenter'><center>".$row['price']."</td>
								  <td>
								  <form action = 'update_cart.php' method = 'POST'>
								  <br><br>
								  <center><strong><input type = 'number' min = '1' max = '99' name = 'varQuantity' value = ".$row['quantity']."></strong>
								  <br><br>
								  <input type = 'hidden' name = 'temp_id' value = '".$row['temp_id']."'>
								  <input type = 'hidden' name = 'varProdPrice' value = '".$row['price']."'>
								  <input type = 'submit' name = 'btnUpdateQuantity' value = 'Update'>
								  </form>
								  </td>
								  <td class='textAlignCenter'><center>".$row['total_price']."</td> 
								  <td><center>
								  <span class='remove-itm'><a href='removeFromCart.php?id=".$row['temp_id']." 'class='customButton'>&times
								  </a></span>
								  </td>
								  
								  <td class='textAlignCenter'></td>
								  </tr>								
								 </tr>";
							}
							
	
	
					  echo "</table>";
						
						//test if logged in
					echo '<button class="bspan2"><a href="empty_cart.php?empty=1"><text style="float: left; color:white"/>&nbsp;&nbsp;&nbsp;&nbsp;Empty Cart</a></button>';
					
					echo'<button class="bspan2"><a href="gallery.php"><text style="float: left; color:white"/>&nbsp;&nbsp;Go Back Shopping</a></button>';
					echo'<button class="bspan2"><a href="test_if_loggedin.php"><text style="float: left; color:white"/>&nbsp;&nbsp;Process Delivery</a></button>';
	
	
					

			}
			
			
		
?>
<input type="hidden" name="return_url" value="<?php 
$current_url = urlencode($url="http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']);
echo $current_url; ?>" />  
	
	<br><br><br>
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
	x
</body>
</html>

<style>
body{
background-color: #FFFFE0;
}
#header {
	background-color: black;
	height: 110px;
	padding: 26px 0 0;
	font-family: arial;
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
	margin: 0 10px;
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
#nav {
	display: inline-block;
	position: relative;
	background-color: transparent;
	height:65px;
	padding: 10px 100px;
	font-family: Segoe UI Light;
	width: 80%;
	line-height: 80px;
	list-style: none;
	margin-left: 220px;
	color: black;
}
#nav li {
	float: left;
	margin: 0 80px;
}
#nav li:first-child {
	margin-left: 0;
}
#nav li a {
	color: black;
	font-family: Segoe UI Semibold;
	font-size: 14px;
	padding: 10px 60px;
	text-decoration: none;
	text-transform: uppercase;
}
#nav li.selected a {
	border-radius:5pt;
	height: 50px;
	width: 100%;
	background:#008B8B;
	color:#252528;
	padding: 10px 60px;
}


.content{
position:absolute;
width:1133px;
height:618px;
background-color: white;
left:200px;
top:80px;

}


.check-out-txt{
	float:right;
}
#footer{
  margin-top:30%;
  background-color:#636269;
  color:white;
  font-family: Segoe UI Light;
  width:100%;
  height:60px;
  text-align:left;
  padding: 12px;
}
#footer p{
  padding:5px 0px 3px 0px;
  margin:0px;
  float: left;
  font-size: 14px;
}


.shopping-cart{
	width: 80%;
	background: #F0F8FF;
	padding: 10px;	
	margin-left: 50px;
	margin-top: 0%;
	border: 1px solid #DDD;
	border-radius: 5px;
	

}


.shopping-cart h2 {
	background: #E2E2E2;
	padding: 4px;
	font-size: 14px;
	margin: 10px 5px;
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

.bspan2 {
	background: black;
	color: white;
	display: inline-block;
	padding-left:25px;
	padding-right:25px;
	padding-top:20px;
	padding-bottom:20px;
	font-family: Segoe UI Light;
	border-radius:5px;
	opacity:0.8;
}
.bspan2:hover {
	background: #C0C0C0;
	color: #000000;
	font-family: Segoe UI Light;
}
</style>
		