<!DOCTYPE>

<html>

<head>
	<title>Feedback</title>
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
	<div id="content">
	 </br></br> </br></br> </br></br>
	<center>
Feedback: </br></br>
				<input maxlength="500" name="feedback"  style="width:600px; height:100px; text-align:center;" required/>
	
	
	</br></br>
	<input type="submit" name="btnmsg"  class="btn" value="Send" />
	</center>
				<?php
					include 'includes\connection.php';
					@$User_ID = $_SESSION["ID"];

					@$feedback = $_POST['feedback'];
					@$Date = date("Y/m/d");
					
				if(isset($_POST['btnmsg']))
				{
					mysql_query("INSERT INTO feedback(user_id,feedback,date) VALUES('$User_ID',
					'$feedback', '$date') ");
					
					header("location: home.php");
				}
				
	
				?>
</div>

<!--start footer-->
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
 margin-top:80%;
position:absolute;
width:1000px;
height:300px;
left:700px;
top:100px;

}

#footer{
  margin-top:30%;
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


.head:hover {
	background: white;
	float: right;
	height: 24px;
	width: 60px;
}
  .carousel-inner > .item > img,
  .carousel-inner > .item > a > img {
  
      width: 30%;
      margin: auto;
	  
  }
</style>