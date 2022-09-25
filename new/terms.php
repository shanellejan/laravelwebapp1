<!DOCTYPE html>

<html>

	<title>Terms</title>
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
        <h4><text style= " font-size: 26px; font-family: calibri">Terms and Condition</h4>
        </br>
				<p><text style= " font-size: 16px; font-family: calibri">
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;This page (together with the documents referred to on it) tells you the terms and conditions on which we supply any of the products (Products) and/or the body scanning services (Services) listed on our website www.pollylagyap.com (our site) to you.  Please read these terms and conditions carefully before ordering any Products or Services from our site.  You should understand that by ordering any of our Products or Services, you agree to be bound by these terms and conditions. The Contract for Services and Contract for Products shall be known collectively as the Contract.
You should print a copy of these terms and conditions for future reference.
By ticking the box at the order form stage, you confirm your acceptance of these terms and conditions.  Please understand that if you refuse to accept these terms and conditions, you will not be able to order any Products or Services from our site.</p></br>
<text style= " font-size: 20px; font-family: calibri; color: blue">1.                   Information about us</text></br>
<text style= " font-size: 16px; font-family: calibri">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;1.1               www.pollylagyap.com is a site operated by Team 4G of Camarines Sur Polytechnic Colleges’ College of Information and Communication Technology (we).  </br></br>
<text style= " font-size: 20px; font-family: calibri; color: blue">2.                   Service availability</text></br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Our site is only intended for use by people resident within Bicol Region. We do not currently accept orders from individuals outside the said region.</br></br>
<text style= " font-size: 20px; font-family: calibri; color: blue">3.                   Your status</text></br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;By placing an order through our site, you warrant that:</br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;(a)            you are legally capable of entering into binding contracts;</br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;(b)            you are at least 18 years old; and</br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;(c)            you are resident within the region scope and you are accessing our site from the said region.</br></br>
<text style= " font-size: 20px; font-family: calibri; color: blue">4.                   Making a booking for body scanning services</text></br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;4.1               Your confirmation of booking Services forms a contract (Contract for Services) between us.  We will provide the Services on the date and at the venue and time specified in the Contract for Services.</br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;4.2               You may cancel a Contract for Services at any time by notifying us in writing. If notification of cancellation is received more than seven working days after the date of our email confirming your booking AND after the Registration Pack is sent to you, a cancellation fee of PHP 1000.00 shall be payable to cover our costs incurred.
</br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;4.3               We will allow you to change your Contract for Services to another available time, date or venue. To amend your Contract for Services, you must request this by email.
</br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;4.4               Once you have confirmed your booking on our site we will send you a registration pack with more information about the Services and Tailored For You (Registration Pack). This will usually be sent to your address however we will send it in an email if your booking is made less than 10 days from the date that the Services are to be carried out.
</br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;4.5               In order for accurate measurements to be taken during the body scan, you must follow the guidelines sent out in the Customization Part of the site. Please ensure that you arrive at least fifteen minutes before the start of your appointment.
</br></br><text style= " font-size: 20px; font-family: calibri; color: blue">5.                   Ordering a suit – how the contract is formed between you and us</text>
</br></br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;5.1               After placing an order, you will receive an e-mail from us acknowledging that we have received your order.  Please note that this does not mean that your order has been accepted.  Your order constitutes an offer to us to buy Products.  All orders are subject to acceptance by us, and we will confirm such acceptance to you by sending you an e-mail (the Order Confirmation).  The contract between us (Contract for Products) will only be formed when we send you the Order Confirmation.
</br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;5.2               Please check that the details on the order are complete and accurate before you commit yourself to the Contract for Products.  If you think that there is an error with your measurements, please do let us know and do not submit your order until this has been rectified.
</br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;5.3               You will not have any right to cancel a Contract for Products as these are made to your specific measurements.
</br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;5.4               This provision does not affect your statutory rights.
</br></br><text style= " font-size: 20px; font-family: calibri; color: blue">6.                   Delivery</text>
</br></br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;6.1               We will take all reasonable steps to deliver the Products to you within 6-8 weeks of the date of the Order Confirmation.  However, occasionally delivery may be affected by factors beyond our control and so cannot be guaranteed.  We will let you know if we become aware of an unexpected delay and will notify you of the expected delivery date.
</br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;6.2               Delivery will be effected by posting the Products to the address sent out in your order.
</br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;6.3               The Products will be your responsibility from the time of delivery.  Ownership in the Products passes when we receive full payment of sums due in respect of the Products, including delivery charges.
</br></br><text style= " font-size: 20px; font-family: calibri; color: blue">7.                   Price and payment</text>
</br></br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;7.1               The price of the Products and Services will be those set out in your on-line order made on our site, except in cases of obvious error in which case we will notify you as soon as possible.
</br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;7.2               These prices include VAT but exclude delivery costs, which will be added to the total amount due as set out in the Order.
</br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;7.3               Payment is only on the time of delivery or pick-up. We will charge you:
</br></br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;(a)            for the Services, at the time you make the booking; and
</br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;(b)            for the Products at the time you complete your order.
</br></br><text style= " font-size: 20px; font-family: calibri; color: blue">8.                   Defective products and returns</text>
</br></br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;8.1               As the Products are made-to-measure we are not able to offer a returns policy for Products which are not defective.  In the unlikely event that the Products do not conform with the Contract for Products, please let us know as soon as possible after delivery.  We will either collect the Products or ask you to return them to us at our cost.  Once we have verified that the Products are faulty we will:
</br></br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;(a)            offer to alter the Products so that they conform with the Contract for Products;or
</br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;(b)            replace the Products; 
</br></br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;8.2               These terms and conditions will apply to any required or replacement Products we supply to you.
</br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;8.3               The Products are made in accordance with the measurements taken during your body scan. We cannot be responsible for any changes necessary to the Products following changes in your measurements after the body scan.
</br></br><text style= " font-size: 20px; font-family: calibri; color: blue">9.                   Our liability</text>
</br></br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;9.1               Our liability for losses you suffer as a result of us breaking this Contract is strictly limited to the purchase price of the Product and/or Service you purchased.
</br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;9.2               This does not include or limit in any way our liability:
</br></br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;(a)            for death or personal injury caused by our negligence;
</br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;(b)            under section 2(3) of the Consumer Protection Act 1987;
</br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;(c)            for fraud or fraudulent misrepresentation; or
</br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;(d)            for any matter for which it would be illegal for us to exclude, or attempt to exclude, our liability.
</br></br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;9.3               We are not responsible for indirect losses which happen as a side effect of the main loss or damage and even if such losses result from a deliberate breach of these Terms by us that would entitle you to terminate the contract between us, including but not limited to:
</br></br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;(a)            loss of income or revenue
</br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;(b)            loss of business
</br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;(c)            loss of profits or contracts
</br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;(d)            loss of anticipated savings; or
</br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;(e)            loss of data.
provided that this clause 9.3 shall not prevent claims for loss of or damage to your physical property.
</br></br><text style= " font-size: 20px; font-family: calibri; color: blue">10.               Written communications</text>
</br></br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Applicable laws require that some of the information or communications we send to you should be in writing.  When using our site, you accept that communication with us will be mainly electronic.  We will contact you by e-mail or provide you with information by posting notices on our website.  For contractual purposes, you agree to this electronic means of communication and you acknowledge that all contracts, notices, information and other communications that we provide to you electronically comply with any legal requirement that such communications be in writing.  This condition does not affect your statutory rights.
</br></br><text style= " font-size: 20px; font-family: calibri; color: blue">11.               Notices</text>
</br></br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;We may give notice to you at either the e-mail or postal address you provide to us when placing an order, or in any of the ways specified in clause 11.  Notice will be deemed received and properly served immediately when posted on our website, 24 hours after an e-mail is sent, or three days after the date of posting of any letter.  In proving the service of any notice, it will be sufficient to prove, in the case of a letter, that such letter was properly addressed, stamped and placed in the post and, in the case of an e-mail,  that such e-mail was sent to the specified e-mail address of the addressee.
</br></br><text style= " font-size: 20px; font-family: calibri; color: blue">12.               Transfer of rights and obligations</text>
</br></br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;12.1            The contract between you and us is binding on you and us and on our respective successors and assigns.
</br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;12.2            You may not transfer, assign, charge or otherwise dispose of a Contract, or any of your rights or obligations arising under it, without our prior written consent.
</br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;12.3            We may transfer, assign, charge, sub-contract or otherwise dispose of a Contract, or any of our rights or obligations arising under it, at any time during the term of the Contract.
</br></br><text style= " font-size: 20px; font-family: calibri; color: blue">13.               Events outside our control</text>
</br></br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;13.1            We will not be liable or responsible for any failure to perform, or delay in performance of, any of our obligations under a Contract that is caused by events outside our reasonable control (Force Majeure Event).
</br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;13.2            A Force Majeure Event includes any act, event, non-happening, omission or accident beyond our reasonable control and includes in particular (without limitation) the following:
</br></br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;(a)            Strikes, lock-outs or other industrial action.
</br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;(b)            Civil commotion, riot, invasion, terrorist attack or threat of terrorist attack, war (whether declared or not) or threat or preparation for war.
</br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;(c)            Fire, explosion, storm, flood, earthquake, subsidence, epidemic or other natural disaster.
</br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;(d)            Impossibility of the use of railways, shipping, aircraft, motor transport or other means of public or private transport.
</br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;(e)            Impossibility of the use of public or private telecommunications networks.
</br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;(f)              The acts, decrees, legislation, regulations or restrictions of any government.
</br></br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;13.3            Our performance under any Contract is deemed to be suspended for the period that the Force Majeure Event continues, and we will have an extension of time for performance for the duration of that period.  We will use our reasonable endeavours to bring the Force Majeure Event to a close or to find a solution by which our obligations under the Contract may be performed despite the Force Majeure Event.
</br></br><text style= " font-size: 20px; font-family: calibri; color: blue">14.               General</text>
</br></br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;14.1            If any court or competent authority decides that any of the provisions of these terms and conditions are invalid, unlawful or unenforceable to any extent, the term will, to that extent only, be served from the remaining terms, which will continue to be valid to the fullest extent permitted by law.
</br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;14.2            If we fail, at any time while these terms and conditions are in force, to insist that you perform any of your obligations under these terms and conditions, or if we do not exercise any of our rights of remedies under these terms and conditions, that will not mean that we have waived such rights or remedies and will not mean that you to not have to comply with those obligations.  If we do waive a default by you, that will not mean that we will automatically waive any subsequent default by you.  No waiver by us of any of these terms and conditions shall be effective unless we expressly say that it is a waiver and we tell you so in writing.
</br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;14.3            A person who is not party to these terms and conditions shall not have any rights under or in connection with them under the Contracts (Rights of Third Parties) Act 1999.
</br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;14.4            These terms and conditions shall be governed by English law and we both agree to the non-exclusive jurisdiction of the Philippine courts.
</br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;14.5            We intend to rely upon these terms and conditions and any document expressly referred to in them in relation to the subject matter of the Contract.  While we accept responsibility for statements and representations made by our duly authorised agents, please make sure that you ask for any variations from these terms and conditions to be confirmed in writing.

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
  margin-top:10%;
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
	height: 100%;
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