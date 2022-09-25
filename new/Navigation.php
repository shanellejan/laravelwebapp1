<?php
// if session 'cart' was set, count it, else set it to 0
$cartItemCount = isset($_SESSION['cart']) ? count($_SESSION['cart']) : 0;
?>