<?php

	session_start();
	if($_SESSION["User"]=="")
	{
		?>
		<script type="text/javascript">
			window.location="home.php";
        </script>
		<?php
	}
	else
	{
		session_destroy();
		?>
        <script type="text/javascript">
			window.location="home.php";
        </script>
			<?php
	}
?>