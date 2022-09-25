<!DOCTYPE>

<html>

<head>
	<title>Polly Lagyap - Sign Up</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	

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
	
<!--contents-->
	
	<div id="content">

<!--Main Body-->
 
             <form class="signupform" id="signupform" method="post" autocomplete="off">
										<h3>
                                            Sign Up
                                            <p style="font-size:small;">&nbsp</p>
                                        </h3>
					Name: 
				<input type="text" name="Lastname" placeholder="Last Name" style="width:300px; height:30px; text-align:center;" required/>
				<input type="text" name="Firstname" placeholder="First Name" style="width:300px; height:30px; text-align:center;" required/><br></br>
				Address: <br>
				<input type="text" name="Zone" placeholder="Zone" style="width:300px; height:30px; text-align:center;" required/>
				<input type="text" name="Street" placeholder="Street" style="width:300px; height:30px; text-align:center;" required/>
				<input type="text" name="Barangay" placeholder="Barangay" style="width:300px; height:30px; text-align:center;" required/>
				<input type="text" name="City_Or_Town" placeholder="City or Town" style="width:300px; height:30px; text-align:center;" required/>
				<input type="text" name="Province" placeholder="Province" style="width:300px; height:30px; text-align:center;" required/><br></br>
				Contact No.: <br>
				<input type="text" name="Cpno" placeholder="Cellphone number" style="width:300px; height:30px; text-align:center;" >
				<input type="text" name="Telno" placeholder="Telephone number" style="width:300px; height:30px; text-align:center;" ><br></br>
				<input type="text" name="Username" placeholder="Username" style="width:300px; height:30px; text-align:center;" required/><br></br>
				<input type="password" name="Password" placeholder="Password" style="width:300px; height:30px; text-align:center;" required/><br></br></br>
				<input type="submit" name="btnregister"  class="btn" value="Sign Up" />
				<?php
					include_once 'dbconnect.php';
				
					
				if(isset($_POST['btnregister']))
				{
				
					$Lastname = $_POST['Lastname'];
					$Firstname = $_POST['Firstname'];
					$Username = $_POST['Username'];
					$Password = $_POST['Password'];
					$Zone = $_POST['Zone'];
					$Street = $_POST['Street'];
					$Barangay = $_POST['Barangay'];
					$City_Or_Town = $_POST['City_Or_Town'];
					$Province = $_POST['Province'];
					$Cpno = $_POST['Cpno'];
					$Telno = $_POST['Telno'];
					$User_Type = 'Customer';
					$Sign_Up_Date = date("Y/m/d");
					 if(mysql_query("INSERT INTO user_account(Lastname, Firstname, Username, Password, Zone,
					Street, Barangay, City_Or_Town,Province, Cpno, Telno, User_Type, Sign_Up_Date) VALUES('$Lastname',
					'$Firstname', '$Username', '".md5($Password)."', '$Zone', '$Street', '$Barangay',
					'$City_Or_Town','$Province', '$Cpno','$Telno',  '$User_Type', '$Sign_Up_Date')"))
					{
	  ?>
	   
			<script>alert('successfully registered ');</script>
			
			<?php
			header("location:login.php");
	 }
	 else
	 {
	  ?>
			<script>alert('error while registering you...');</script>
	 <?php
	 }
				
	}
				
	
	?>
          </form>
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
	background: white;
	color: black;
	font-family: Segoe UI Light;
}
.signupform {
	width: 800px;
	height: 900px;
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
	font-weight: none;
	float: center;
}
#signupform{
	border-radius: 3px;
	border: 6px;
}
#signupform:hover{
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
	width: 30%;
}
</style>