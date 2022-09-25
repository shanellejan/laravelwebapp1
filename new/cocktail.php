
<!DOCTYPE html>
<html>
<head>
	
	<title>Gallery - cocktail</title>
	<meta charset="UTF-8">
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
	</div>
	
<nav id = "side_nav_wrap">
			<ul>
							
			<a>TYPES <hr id="seperate" /></a>
			<li><a href="gallery.php">All</a></li>
			<li><a href="gowns.php">Gowns</a></li>
			<li><a href="cocktail.php">Cocktail Dresses</a></li>
			<li><a href="tuxedo.php">Tuxedo</a></li>
			<li><a href="barong.php">Barong</a></li>
			</ul>
	</nav>
	
	

<!--contents-->
<div class= "content"><br><br>	
<!-- Products View -->			
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
            
                        
                        require "libs/DbConnect.php";
            
                        $query = "SELECT * FROM products WHERE type='cocktail'";
                        $result = mysql_query($query);
   
                            if($result)
							{                        
                                    while ($row = mysql_fetch_array($result))
                                    {     
                                        echo "<div class='product-item'>";
										echo "<img src = '".$row['image_path']."' margin-top = '50%' width = '260px' height = '320px'><br>
											   <strong>".$row['product_code']."</strong><br>
								
											   Php ".$row['price']."
											   <br><br>";
										echo  "<a href='quickview.php?id=".$row['id']."&type=".$row['type']."' class='btn3'><text style='color:white'/>
										&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;View Detail</a><br>";
										 echo "</div>";
                                    }
                    
                                	
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
.product-item 
{	
	float:left; 
	margin-top: 100px;	
	margin-left: 46px;
	padding:2px;
	font-family:Segoe UI Light;
	font-style: bolder;
	overflow: float;

}
.product-item div
{  
	position: relative;
	float:justify;
	font-family:Segoe UI Light;
	font-size:12px;
	left:15px

}




#footer{
  margin-top:2000px;
  background-color:#636269;
  color:white;
  font-family: Segoe UI Light;
  width:100%;
  height:60px;
  text-align:center;
  padding: 12px;
}
#footer p{
  padding:5px 0px 3px 0px;
  margin:0px;
  float: left;
  font-size: 14px;
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
	height: 2000px;
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
.btn3 {
	margin-left: 30%;
	background: black;
	color: white;
	display: block;
	height: 34px;
	line-height: 34px;
	width: 100px;
	border-radius: 5px;
	font-family: Segoe UI Light;
	
}

</style>