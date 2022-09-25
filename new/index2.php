<!DOCTYPE>

<html>

<head>
	<title>Polly Lagyap Home</title>
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
				echo "<span><a href = 'logout.php?logout=1'><text style='float: right; color:white'/>&nbsp; | Logout</a></span>";
				
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
				<li  class="selected">
					<a href="index2.php" title = "Home">Home</a>
				</li>
				<li>
					<a href="addprod.php" title= "Products">Products</a>
				</li>
				<li>
					<a href="delivery.php" title= "Customization">Delivery</a>
				</li>
				<li>
					<a href="inventory.php" title= "For Rent">Inventory</a>
				</li>
				<li>
					<a href="sales.php" title= "The Designer">Sales</a>
				</li>
				
			</ul>

		</div>
	</div>
	
	<!--contents-->
	
	<div id="content">
	
			
	
		<center></br></br></br></br></br></br></br></br>&nbsp;&nbsp;&nbsp;&nbsp;Welcome Admin...</center>
						
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
body{
background-image: url(images/w.jpg)
}

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

.content{
 margin-top:60%;
position:absolute;
width:1000px;
height:1000px;
left:200px;
top:100px;

}

#footer{
  margin-top:7%;
  background-color:#636269;
  color:white;
  font-family: Segoe UI Light;
  width:100%;
  height:60px;
  text-align:center;
  padding: 10px;
}
#footer p{
  padding:5px 0px 3px 0px;
  margin:0px;
  float: left;
  font-size: 12px;
}
.content{
position:absolute;
width:1000px;
height:1000px;
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
  margin-top:50%;
  background-color:#636269;
  color:white;
  font-family: Segoe UI Light;
  width:98.2%;
  height:60px;
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
	height: 26px;
	width: 109px;
	font-family: Segoe UI Light;
	
}


.loginform {
	width: 400px;
	height: 360px;
	margin-top: 60px;
	margin-left: 500px;
	margin-right: 500px;
	padding: 10px;
	background-color: #DCDCDC;
	border-radius: 4px;
	color: #000000;
	opacity: 0.7;
	font-size: 15px;
	font-family: Segoe UI Light;
	font-weight: bolder;
	float: center;
}
#loginform{
	border-radius: 3px;
	border: 6px;
}
#loginform:hover{
	/*color: #778899;*/
	
}
.input-box {
		display: inline-block;
		float: none;
		margin: 8px 0;
		position: relative;
		width: 100%;
}

input[type="text"]{

	margin: 2px;
	width: 10%;
}
input[type="password"]{
	margin: 2px;
	width: 10%;
}
</style>