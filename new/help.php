<!DOCTYPE html>

<html>

	<title>Guidelines</title>
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
	

<div id="input">
        <h4><strong><text style= " font-size: 21px; font-family: calibri">Measurement Guide</strong></h4>
        </br>
            <h6><p><text style= " font-size: 16px; font-family: calibri">When you measure yourself, you want the measurements to be as accurate as possible so it allows you to make garments that fits perfectly. There is a few simple rules to follow: <span id="more-21">&nbsp;</span></p>
				<p><br> <text style= " font-size: 16px; font-family: calibri">1. Do not measure over heavy garments, the best is to take your measurements while you wear underwear only.</p>
				<p><text style= " font-size: 16px; font-family: calibri">2. The measurements should match your body in a normal situation, do not pull your stomach in, hold your breath, or do anything that would alter your actual figure. You want to have accurate measures, not to impress anyone with false measurements.</p>
				<p><text style= " font-size: 16px; font-family: calibri">3. Use a tape ruler (tape measurement). Make sure it is not too tight, and not too loose, it must fit perfectly around your skin.</p>
				<p><text style= " font-size: 16px; font-family: calibri">4. It is best if you can get someone to help you take the measurements so that you do not bend awkwardly and sacrifice accuracy.</p>
				</h6>
				<center>
				<h5>
				  </br>
				<p>For the Men:</p>  </br>
				<p><img src="images/tumblr_m08k4sfGBK1qmqwkk.jpg"></p>  </br>
				<p>For the Ladies:</p>  </br>
				<p><img src="images/tumblr_m08k5eJmPe1qmqwkk.jpg"></p>  </br>
				<p>Shoulder width measurement guide:</p>  </br>
				<p><img src="images/tumblr_ma75itdj2R1qmqwkk.jpg"></p>  </br>
				<p>Shoulder Shape:</p>  </br>
				<p><img src="images/tumblr_ma75o4giEX1qmqwkk.jpg"></p>  </br>
				</h5>
				
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




#footer{
  margin-top:auto;
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


#input{
	width: 90%;
	height: 60%;
	background: #F0F0F0;
	float: center;
	margin-left: 90px;
	padding: 10px;	
	border: 1px solid #DDD;
	border-radius: 5px;
	font-size: 21px;
	font-family: Segoe SU Light;
	
}
</style>