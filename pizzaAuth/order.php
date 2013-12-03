<?php
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
<form method="post">
<?php 
$Username = $_SESSION['username'];
if(strlen($Username) == 0)
{
echo "This is not a valid login, Redirecting to login...";
   header('location: index.php');	
}
if (isset($_POST['pizzaButton']))
{
	echo "<script>popup = window.open('./OrderPizza.php')</script>"; 
	//echo"Test";
}
if (isset($_POST['wingsButton']))
{
	echo "<script>popup = window.open('./OrderWings.html')</script>"; 	
	//echo"Test";
}
if (isset($_POST['sodaButton']))
{
	echo "<script>popup = window.open('./OrderSoda.html')</script>"; 	
	//echo"Test";
	//echo $Username;
}

if (isset($_POST['logoutButton']))
{
	header('location: unset.php');
}

?>

		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		<a href="unset.php" ><button name="logoutButton" id="Logout" type="submit" class="btn" value="logout"  
								     style="float:right;margin-top:18px;"/>Logout</button></a>
									 
		<h1 style="float:left;margin-top:18px;"> Username: <?php echo $_SESSION['username']; ?> &nbsp;</h1><br /><br/><br/><br/>
		
		<hr color="#ffff00" size="50">
		<div id="buttons"  style="float:left;margin-top:21px;">
			<button name="pizzaButton" id="PizsaButton" class="index" type="submit" onClick="#"/>Pizza </button><br/>
			<button name="wingsButton" id="WingsButton" type="submit" class="index" onClick="#"/>Wings</button><br />
            <button name="sodaButton" id="sodaButton" type="submit" class="index" onClick="#"/>Soda</button><br />
            <button id="CartButton" type="submit" class="index" onClick="#"/>Cart</button><br />
            <button id="CheckoutButton" type="submit" class="index" onClick="#"/>Checkout</button><br />
			<br/> 
			
					<?php echo $_SESSION['order']; ?>

		</div><br /><br/><br/><br/><br /><br/><br/><br/><br /><br/><br/><br/><br /><br/><br/><br/><br /><br/><br/><br/><br /><br/><br/><br/><br/>
		<hr color="#ffff00" size="20">
		</form>
</body>
</html>