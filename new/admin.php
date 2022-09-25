<?php 
session_start();
if($_SESSION["User"]!="admin")
{	
?>
	<script type="text/javascript">
		window.location="home.php";
    </script>
<?php } else { ?>
	<script type="text/javascript">
		window.location="product.php";
    </script>
<?php } ?>