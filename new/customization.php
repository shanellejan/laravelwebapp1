<!DOCTYPE html>

<html>

	<title>Customization</title>
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
					<a href="home.php" title = "Home">Home</a>
				</li>
				<li>
					<a href="gallery.php" title= "Products">Products</a>
				</li>
				<li class=selected>
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
	
	
<!--contents-->
	
<div id="content">
		
<!--Input Form-->			


<form action="savecustomization.php" enctype="multipart/form-data"class="measurementform " id="measurementform" method="post" autocomplete="off">

<div class="input-box">
	Gender:
	<select type="select" name="gender"/>
	<option value="Female">Female</option>
	<option value="Male">Male</option>
	</select>
	</br></br>
	Type of Product:&nbsp;&nbsp;&nbsp;
	<select name="type" type="select" name="select" style= "border-radius: 3px; width: 200px; height: 30px; border-style: solid; border-width: 1px; border-color: #95968c"/>
	<option value="Long Gown">Gown</option>
	<option value="Barong">Barong</option>
	<option value="Tuxedo">Tuxedo</option>
	<option value="Cocktail">Cocktail</option>
	
	</select>
	</br></br>
	Color: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="color" placeholder="" style= "border-radius: 3px; width: 200px; height: 30px; border-style: solid; border-width: 1px; border-color: #95968c">
	</br></br>
	Description: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	<input name="description" type="text" name="description" placeholder="" style= "border-radius: 3px; width: 200px; height: 30px; border-style: solid; border-width: 1px; border-color: #95968c"/>
	</br></br>
	
	<h4>
	Measurement<br>_______________________________________________________________________<br>
	</h4>

	Bust: <input type="number" name="bust" placeholder="inches"  min = '1' style="width:70px; height:30px; text-align:center;"/>
	Hips: <input type="number" name="hips" placeholder="inches" min = '1' style="width:70px; height:30px; text-align:center;"/>
	Figure: <input type="number" name="figure" placeholder="inches"  min = '1' style="width:70px; height:30px; text-align:center;"/>
	Shoulder: <input type="number" name="shoulder" placeholder="inches"  min = '1' style="width:70px; height:30px; text-align:center;"/></br>
	Waist Line: <input type="number" name="waistline" placeholder="inches"  min = '1' style="width:70px; height:30px; text-align:center;"/>
	Arm Length: <input type="number" name="armlength" placeholder="inches"  min = '1' style="width:70px; height:30px; text-align:center;"/>
	Skirt Length: <input type="number" name="skirtlength" placeholder="inches"  min = '1' style="width:70px; height:30px; text-align:center;"/></br></br>
	Desired Design:
		<input name="image" type="file"></br></br></br>
		
		
	<p>
	<a href="help.php">Measurement Guidelines</a></br></br></br>
		<button type="submit" class="btn"><a href='emailcon.php'><span><span>Send</span></span></button>
		<button type="reset" id="reset"  class="btn" value="Clear"><span><span>Clear</span></span></button>
		
		
	</p>
</div>
</form>
</div></div></div>
 
                           

	
							
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
position:absolute;
width:1000px;
height:618px;
left:200px;
top:100px;

}

#footer{
  margin-top:20%;
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
	color: white;
	display: inline-block;
	width: 60px;
	height: 50px;
	line-height: 34px;
	width: 109px;
	font-family: Segoe UI Light;
	
}
.btn:hover {
	background: #C0C0C0;
	color: black;
	font-family: Segoe UI Light;
}
.measurementform {
	width: 750px;
	height: 780px;
	margin-top: 90px;
	margin-left:20%;
	margin-right: 0%;
	padding: 10px;
	background-color: #F8F8FF;
	border-radius: 11px;
	color: #000000;
	font-size: 14px;
	font-family: arial;
	float: center;
	opacity: 0.8;
}
#measurementform {
	border-radius: 3px;
	border: 6px;
}

.input-box {
		display: inline-block;
		float: none;
		margin: 8px 0;
		position: relative;
		width: 100%;
		height: auto;
}

input[type="number"]{
	margin: 10px;
	width: 39px;
}

input[type="text"]{
	width: 100px;
	
}
</style>