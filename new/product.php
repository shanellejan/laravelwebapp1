<!DOCTYPE>

<html>
<head>
	<title>Delivery</title>
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
				<li   class="selected">
					<a href="product.php" title= "Products">Products</a>
				</li>
				<li>
					<a href="delivery.php" title= "Customization">Delivery</a>
				</li>
				<li>
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

		<!--Main Body-->
		<h3><strong>Products</strong></h3><br>
		
		<button class="btn" > <a href="addprod.php"><text style="float: left; color:white"/>Edit Products</a></br></br>
        <table cellpadding = auto  cellspacing = 10 border = 1>

<td><b> Product Code </td>
<td><b> Product ID </td>
<td><b> Name </td>
<td><b> Price </td>
<td><b> Type </td>
<td><b> Description </td>
<td><b> Image </td>

<?php
	include_once("includes\connection.php");
	
	$sql = mysql_query ("SELECT * FROM products");
	
	$count = mysql_num_rows($sql);
	
	while($result = mysql_fetch_array($sql))
	{
		echo"<tr>";
		echo "<td>".$result['product_code']."</td>";
		echo "<td>".$result['id']."</td>";
		echo "<td>".$result['product_name']."</td>";
		echo "<td>".$result['price']."</td>";
		echo "<td>".$result['type']."</td>";
		echo "<td>".$result['product_desc']."</td>";
		echo "<td>".$result['image_path']."</td>";
		echo "</tr>";
		}
?>
</table>
		<!--End of Main Body-->

                           
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
width:100%;
height:618px;
left:200px;
top:100px;

}



#footer{
  margin-top:100%;
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


.btn {
	background: black;
	color: black;
	display: inline-block;
	width: 60px;
	height: 40px;
	width: 100px;
	font-family: Segoe UI Light;
	margin: 3px;
	
	
}
.btn:hover {
	background: gray;
	color: white;
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
