<!DOCTYPE>

<html>
<head>
	<title>Add Products</title>
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
			if(isset($_SESSION['currentuser']))
			{
				echo "<text style='float: right; color:white'/>WELCOME ".$_SESSION['currentuser'];
				echo "<span><a href = 'admin_authenticate.php?logout=1'><text style='float: right; color:white'/>&nbsp; | Logout</a></span>";
				
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
					<a href="index2.php" title = "Home">Home</a>
				</li>
				<li>
					<a href="delivery.php" title= "Products">Delivery</a>
				</li>
				<li class="selected">
					<a href="admincustomization.php" title= "Customization">Customization</a>
				</li>
				<li>
					<a href="view_cart.php" title= "Cart">Cart</a>
				</li>
				<li>
					<a href="addprod.php" title= "The Designer">Add/Update</a>
				</li>
				<li>
					<a href="sales.php" title = "Contact Us">Sales</a>
				</li>
			</ul>

		
	</div>
	
	
	
	<!--contents-->
	
<div id="content">

 
		
		       <center><table style="border-collapse: collapse; font: 12px Tahoma;" border="5" cellspacing="5" cellpadding="7">
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "fashion";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
     die("Connection failed: " . $conn->connect_error);
} 

$sql = "SELECT * FROM measurement";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
     // output data of each row
	 
	 echo "<td>User ID</td>" . "<td>Date</td>" . "<td>Customization No.</td>"  . "<td>Type</td>"  . "<td>Bust</td>"  . "<td>Waistline</td>"  . "<td>Hips</td>"  . "<td>Figure</td>" . "<td>Shoulder</td>"  . "<td>Arm Length</td>" . "<td>Skirt Length</td>"  . "<td>Description</td>"  . "<td>Gender</td>"  ."<td>Color</td>"  .  "<td>Image Path</td>"  . "<br>"; 
     while($row = $result->fetch_assoc()) {
         echo "<tr><td>".$row["user_id"]."</td>" . "<td>".$row["date"]."</td>" ."<td>".$row["customization_no"]."</td>" ."<td>".$row["type"]."</td>" ."<td>".$row["bust"]."</td>" ."<td>".$row["waistline"]."</td>" ."<td>".$row["hips"]."</td>" ."<td>".$row["figure"]."</td>" ."<td>".$row["shoulder"]."</td>" ."<td>".$row["armlength"]."</td>" ."<td>".$row["skirtlength"]."</td>" ."<td>".$row["description"]."</td>" ."<td>".$row["gender"]."</td>" ."<td>".$row["color"]."</td>" ."<td>".$row["image_path"]."</td>" ."<br>";
     }
} else {
     echo "0 results";
}

$conn->close();
?>  
</table><br><br><br><br>

</form>
                         
                           
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
