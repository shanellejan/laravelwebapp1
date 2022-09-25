<?php
	session_start();
	include_once("includes\connection.php");
	
	if($_SESSION["User"]=='')
	{	
?>
	<script type="text/javascript">
		window.location="continue-login.php";
    </script>
<?php } ?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Cart</title>
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
	<ul id="nav">

				<li>
					<a href="view_cart.php" title = "Review You Cart">Review Your Cart</a>
				</li>
				<li class="selected">
					<a href="checkout.php" title= "Delivey">DELIVERY</a>
				</li>
				
				
			</ul>
	<div id="content">
	

			

     	<form class="signupform" id="signupform" method="post" autocomplete="off">	
            <h4><strong></br>Payment Type : CASH ON DELIVERY</strong></h4>
			<?php 
	$userID = $_SESSION['ID'];

	$get = mysql_query("SELECT * FROM user_account WHERE User_ID = '$userID'");

	$result = mysql_fetch_array($get);

		$Lastname = $result['Lastname'];
		$Firstname = $result['Firstname'];
		$Zone = $result['Zone'];
		$Street = $result['Street'];
		$City_Or_Town = $result['City_Or_Town'];
		$Barangay = $result['Barangay'];
		$Province= $result['Province'];
		$Cpno = $result['Cpno'];
		$Telno = $result['Telno'];
		
	
		
?>
	Address To:
	<input type = "text" name = "Lastname" value = "<?php echo $Lastname?>" placeholder = "Lastname" style="width:300px; height:30px; text-align:center;"   required/>
	<input type = "text" name = "Firstname" value = "<?php echo $Firstname?>" placeholder = "Firstname" style="width:300px; height:30px; text-align:center;"  required/><br><br>
	Delivery Address: 
	<input type = "text" name = "Zone" value = "<?php echo $Zone?>" placeholder = "Zone" style="width:300px; height:30px; text-align:center;"  >
	<input type = "text" name = "Street" value = "<?php echo $Street?>" placeholder = "Street" style="width:300px; height:30px; text-align:center;"  required/>
	<input type = "text" name = "Barangay" value = "<?php echo $Barangay?>" placeholder = "Barangay" style="width:300px; height:30px; text-align:center;"  required/>
	<input type = "text" name = "City_or_Town" value = "<?php echo $City_Or_Town?>" placeholder = "City or Town" style="width:300px; height:30px; text-align:center;"  required/>
	<input type = "text" name = "Province" value = "<?php echo $Province?>" placeholder = "Province" style="width:300px; height:30px; text-align:center;"  required/><br><br>
	Contact No:
	<input type = "text" name = "Cpno" value = "<?php echo $Cpno?>" placeholder = "Cellphone No." style="width:300px; height:30px; text-align:center;">
	<input type = "text" name = "Telno" value = "<?php echo $Telno?>" placeholder = "Telephone No." style="width:300px; height:30px; text-align:center;"><br><br>
	 
			
			<p><input type="checkbox" required />I have accepted the <a href="terms.php">Terms of Use</a></p>
	

	<input type = "submit" value = "Submit" name= "submit" style = "background:black; color:white; font:calibri; width: 150px; height: 38px; border-radius: 5px; text-align: center;"">
	</form>
<?php
	
	if(isset($_POST['submit'])){
	
	$User_ID = $_SESSION["ID"];
	$Date = date('Y/m/d');
	
	$cZone = $_POST['Zone'];
	$cStreet = $_POST['Street'];
	$cCity_Or_Town = $_POST['City_or_Town'];
	$cBarangay = $_POST['Barangay'];
	$cProvince = $_POST['Province'];
	$cCpno = $_POST['Cpno'];
	$cTelno = $_POST['Telno'];

	$q2 = mysql_query("INSERT INTO delivery(User_ID, Zone, Street, Barangay, City_or_Town,Province , Cpno,Telno, Order_Date)
	VALUES('$User_ID', '$cZone', '$cStreet', '$cCity_Or_Town', '$cBarangay', '$cProvince', '$cCpno', '$cTelno','$Date')");
	
	header("location: successful.php");
	}
?>
			
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
background-image: url(images/w.jpg);
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
	height:50px;
	padding: 10px 100px;
	font-family: Segoe UI Light;
	width: 100%;
	line-height: 80px;
	list-style: none;
	margin-left: 200px;
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
	padding: 10px 100px;
	text-decoration: none;
	text-transform: uppercase;
}
#nav li.selected a {
	border-radius:5pt;
	height: 50px;
	width: 100%;
	background:#DC143C;
	color:#252528;
	padding: 10px 100px;
}
#nav li a:hover{
	border-radius:5pt;
	height: 50px;
	width: 100%;
	background:#DCDCDC;
	color:#252528;
	padding: 10px 100px;
	
	
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
  margin-top:10%;
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
	background: black;
	color: white;
	display: block;
	height: 36px;
	line-height: 34px;
	width: 109px;
	border-radius: 5px;
	font-family: Segoe UI Light;
	
}
.btn3:hover {
	background: gray;
	color: black;
	font-family: Segoe UI Light;
}
#nav {
	display: inline-block;
	position: relative;
	background-color: transparent;
	height:80px;
	padding: 10px 100px;
	font-family: Segoe UI Light;
	width: 100%;
	line-height: 80px;
	list-style: none;
	margin-left: 200px;
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
#nav li a:hover{
	border-radius:5pt;
	height: 50px;
	width: 100%;
	background:#DCDCDC;
	color:#252528;
	padding: 10px 60px;
	
	
}

.signupform {
	width: 800px;
	height: 570px;
	margin-top: 60px;
	margin-left: 200px;
	margin-right: 200px;
	padding: 10px;
	background-color: #F8F8FF;
	border-radius: 4px;
	color: #000000;
	opacity: 0.7;
	font-size: 15px;
	font-family: arial;
	float: center;
}
#signupform{
	border-radius: 3px;
	border: 6px;
}
#signupform:hover{
	/*color: #778899;*/
	
}
</style>
		