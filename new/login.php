<!DOCTYPE>

<html>

<head>
	<title>Polly Lagyap - Log In</title>
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
		
			include_once("includes\connection.php");
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
					<a href="product.php" title= "Products">Products</a>
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
	
	
<!--Start Login Form-->
	
<div id="content">
	<form class="loginform" id="Loginform" method="post" autocomplete="off">                                
		<!--Main Body-->
	<h4>
			<strong>Sign In</strong><br>
			<p style="font-size:small;"><br>&nbsp;&nbsp;Already have an account? Sign in below.</p>
			<p style="font-size:small;"></p>
		</h4>
	<br><br>
	&nbsp;&nbsp;&nbsp;&nbsp;Username &nbsp;&nbsp;<input type = "text" name = "Username" style = "width: 250px; height:30px; text-align: center" placeholder = "eg. alecabok" required/><br><br>
	&nbsp;&nbsp;&nbsp;&nbsp;Password  &nbsp;&nbsp;<input type = "password" name = "Password" style = "width: 250px; height:30px; text-align: center" placeholder = "**************" required/><br><br>
	<center></br>
	<input type = "submit" class= 'btn' name = "login"  Value = "Log-in"><br>
	<a href="register.php">Sign Up</a>
	</form>

<?php
	@$Username = $_POST['Username'];
	@$Password = $_POST['Password'];
	
	function clean($str){
		$str=@trim($str);
		if(get_magic_quotes_gpc()){
			$str=stripslashes($str);
		}
		return mysql_real_escape_string($str);
	}
	
	$Username=clean($Username);
	$Password=clean($Password);
	
	if(isset($_POST['login']))
	{
		$qry="SELECT * FROM user_account WHERE Username='$Username' AND Password='".md5($Password)."'";
	
		$result=mysql_query($qry);
		
		while($row = mysql_fetch_array($result))
		{		
			$_SESSION["User"] = $row["Username"];
			$_SESSION["ID"] = $row["User_ID"];
			$_SESSION["Password"] = $row["Password"];
			$_SESSION["UserType"] = $row["User_Type"];
		?>
        <script type="text/javascript">
			window.location="gallery.php";	
        </script>
		<?php
		} 
			   error_reporting(0);
		$name =$_SESSION["User"];
		$id =$_SESSION["ID"];
		$type = $_SESSION["UserType"];
		$date = date('Y/m/d');
		
		
		if($_SESSION["User"]!=""){
			mysql_query("INSERT INTO user_login_logs (User_ID, Username, User_Type, Login_Date_Time) VALUES
			('$id', '$name', '$type', '$date')");
		}
		
	}
?><br><br><br><br><br>
		<!--End of Main Body-->
</div>
<!--end login form-->
	

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
background-image: url(images/w.jpg);
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
 margin-top:10%;
position:absolute;
width:1000px;
height:1000px;
left:200px;
top:100px;

}

#footer{
  margin-top:15%;
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
	display: block;
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
.loginform {
	width: 450px;
	height: 400px;
	margin-top: 90px;
	margin-left: 500px;
	margin-right: 500px;
	margin-bottom: 60px;
	padding: 10px;
	background-color: #F0FFFF;
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

.input-box {
		display: inline-block;
		float: none;
		margin: 5px 0;
		margin-left: 25px;
		position: relative;
		width: 140%;
		
}

input[type="text"]{
	margin: 0px;
	width: 50%;
	height: 30px;
	border-radius: 3px;

	
}
input[type="password"]{
	margin: 2px;
	width: 50%;
	height: 30px;
	border-radius: 3px;
}
</style>