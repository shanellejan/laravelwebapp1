<?php
session_start();
include_once("config.php");
?>

<html>

	<title>Cart</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="styles/carousel.css" rel="stylesheet" type="text/css"/>
	
</head>
<body>

	<!--Header-->
	<div id="header">
	
		<div>
		
		
		<?php
		
		session_start();
		include_once("config.php");
			if(isset($_SESSION['currentuser']))
			{
				echo "<text style='float: right; color:white'/>WELCOME ".$_SESSION['currentuser'];
				echo "<span><a href = 'authenticate.php?logout=1'><text style='float: right; color:white'/>&nbsp; | Logout</a></span>";
				
			}
			else
			{
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
					<a href="product.php" title= "Products">Products</a>
				</li>
				<li>
					<a href="customization.php" title= "Customization">Customization</a>
				</li>
				<li>
					<a href="rental.php" title= "Gowns for Rent">Gowns for Rent</a>
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
	
	
<!-- start gallery -->			

<div id="products-wrapper">
    <div class="products">
    <?php
	$current_url = base64_encode($url="http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']);
    
	$results = $mysqli->query("SELECT * FROM product ORDER BY id ASC");
    if ($results) { 
	
        while($obj = $results->fetch_object())
        {
			echo '<div class="product">'; 
            echo '<form method="post" action="cart_update.php">';
			echo '<div class="product-thumb"><img src="images/'.$obj->product_img_name.'"></div>';
            echo '<div class="product-content"><h3>'.$obj->prod_name.'</h3>';
            echo '<div class="product-desc">'.$obj->description.'</div>';
            echo '<div class="product-info">';
			echo 'Price: P'.$obj->prod_price.' | ';
            echo 'Qty <input type="text" name="product_qty" value="1" size="3" />';
			echo '<button class="add_to_cart">Add To Cart</button>';
			echo '</div></div>';
            echo '<input type="hidden" name="prod_code" value="'.$obj->prod_code.'" />';
            echo '<input type="hidden" name="type" value="add" />';
			echo '<input type="hidden" name="return_url" value="'.$current_url.'" />';
            echo '</form>';
            echo '</div>';
        }
    
    }
    ?>
</div>

<!--end product view-->
   
<!--start shopping cart-->   
<div class="shopping-cart">
	<h2>Shopping Cart</h2>
<?php
if(isset($_SESSION["products"]))
{
    $total = 0;
    echo '<ol>';
    foreach ($_SESSION["products"] as $cart_itm)
    {
        echo '<li class="cart-itm">';
        echo '<span class="remove-itm"><a href="cart_update.php?removep='.$cart_itm["code"].'&return_url='.$current_url.'">&times;</a></span>';
        echo '<h3>'.$cart_itm["name"].'</h3>';
        echo '<div class="p-code">P code : '.$cart_itm["code"].'</div>';
        echo '<div class="p-qty">Qty : '.$cart_itm["qty"].'</div>';
        echo '<div class="p-price">Price : Php'.$cart_itm["price"].'</div>';
        echo '</li>';
        $subtotal = ($cart_itm["price"]*$cart_itm["qty"]);
        $total = ($total + $subtotal);
    }
    echo '</ol>';
    echo '<span class="check-out-txt"><strong>Total : P'.$total.'</strong> <a href="view_cart.php">Process Order!</a></span>';
	echo '<span class="empty-cart"><a href="cart_update.php?emptycart=1&return_url='.$current_url.'">Empty Cart</a></span>';
}else{
    echo 'Your Cart is empty';
}
?>

</div>
<!--end shopping cart-->

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
  margin-top:3000px;
  background-color:#636269;
  color:white;
  font-family: Segoe UI Light;
  width:98.2%;
  height:30px;
  text-align:left;
  padding: 12px;
}
#footer p{
  padding:5px 0px 3px 0px;
  margin:0px;
  float: left;
  font-size: 14px;
}
#products-wrapper {
	width: 1000px;
	margin-right: 100px;
	margin-left: 100px;
	font-family: Segoe UI Light;
	margin-top: 5%;
	
}
.products {
	width: 60%;
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
	height: 290px;
	background: black;
	padding: 15px;
	border: 1px solid #DDD;
	border-radius: 5px;
	font-family: calibri;
	font-size:12px;
	color:white;
}
.product .product-thumb {
	float: left;
	height: auto;
	width: auto;
	margin-right: 10px;
}
.product .product-content{
	overflow:hidden;
	font-family: Segoe UI Light;
}
.product .product-content h3 {
	font-size: 21px;
	margin: 0px;
	padding: 0px;
	color: white;
	font-family: Segoe UI Light;
}
/*, avail, qty*/
.product .product-info {
	float: fixed right;
	font-size: 18px;
	display: block;
	font-weight: bold;
	margin-top:10px;
	padding-top:129px;
	font-family: Segoe UI Light;
}

.shopping-cart{
	width: 80%;
	background: #F0F8FF;
	padding: 10px;	
	margin-left: 110px;
	border: 1px solid #DDD;
	border-radius: 5px;
	

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
</style>
		