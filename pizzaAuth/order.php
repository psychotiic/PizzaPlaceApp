﻿<?php
session_start();
include 'db.php';
if ($user -> LoggedIn())
{
	header('location: index.php');
	die();
}

?>
<!DOCTYPE html>
<html>
<head>
	<title>D & T's Login</title>
	<meta name="viewport" content="width=device-width, initial-scale=1" /> 
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<link rel="stylesheet" href="theme.css">
	<script type="text/javascript" src="index.js"></script>
	 <script src="./lib/jquery-1.10.1.js"></script>


</head>
<body>

<div id="regButton">
			<button id="PizsaButton" class="index" type="submit" onClick="#"/>Pizza </button><br/>
			<button id="WingsButton" type="submit" class="index" onClick="#"/>Wings</button><br />
            <button id="sodaButton" type="submit" class="index" onClick="#"/>Soda</button><br />
            <button id="CartButton" type="submit" class="index" onClick="#"/>Cart</button><br />
            <button id="CheckoutButton" type="submit" class="index" onClick="#"/>Checkout</button><br />
			<a href="unset.php" ><button id="Logout" type="submit" class="index" value="logout"/>Logout</button></a><br />
			
			<br/>
			
			<?php echo $_SESSION['username']; ?> 
		</div>
</body>
</html>