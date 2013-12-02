﻿<?php 
//this starts the session for the users, like weather loged in an what not 
session_start();
require 'db.php';
?>
  <!---jQuery Files
  <script src="js/jquery.js"></script>
  <script src="js/inputs.js"></script>-->

<!DOCTYPE html> 
<html> 
<head> 
	<title>D & T's Pizza Emporium</title>

    <meta name="viewport" content="width=device-width, initial-scale=1" /> 
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<link rel="stylesheet" href="theme.css">
    <script src="./lib/jquery-1.10.1.js"></script>
	<script type="text/javascript" src="index.js"></script>


</head> 
<form method="post">

<?php	
if (!($user -> LoggedIn()))
{
	if (isset($_POST['loginButton']))
	{
		$username = $_POST['username'];
		$password = $_POST['password'];
		$errors = array();
		if (!ctype_alnum($username) || strlen($username) < 2 || strlen($username) > 15)
		{
			$errors[] = 'Username Must Be  Alphanumberic And 4-15 characters in length';
		}
		
		if (empty($username) || empty($password))
		{
			$errors[] = 'Please fill in all fields';
		}
		
		if (empty($errors))
		{
			$SQLCheckLogin = $odb -> prepare("SELECT COUNT(*) FROM `user` WHERE `username` = :username AND `password` = :password");
			$SQLCheckLogin -> execute(array(':username' => $username, ':password' => $password));
			$countLogin = $SQLCheckLogin -> fetchColumn(0);
			if ($countLogin == 1)
			{
				$SQLGetInfo = $odb -> prepare("SELECT `username`, `id` FROM `user` WHERE `username` = :username AND `password` = :password");
				$SQLGetInfo -> execute(array(':username' => $username, ':password' => $password));
				$userInfo = $SQLGetInfo -> fetch(PDO::FETCH_ASSOC);
					$_SESSION['username'] = $userInfo['username'];
					//$_SESSION['ID'] = $userInfo['id'];
					echo '<center><div class="alert green ">Success! </h4>Logging In.. <meta http-equiv="refresh" content="3;url=order.php"></div><center>';
				
				/*if ($userInfo['status'] == 0)
				{
					$_SESSION['username'] = $userInfo['username'];
					$_SESSION['ID'] = $userInfo['ID'];
					echo '<center><div class="alert green ">Success! </h4>Logging In.. <meta http-equiv="refresh" content="3;url=order.php"></div><center>';
				    //header('location: order.php');
				}
				else
				{
					echo '<center><div class="alert red "><p><strong>Error!: </strong>Your user was banned</p></div></center>';
				} */
			}
			else
			{
				echo '<center><div class="alert red "><p><strong>Error!: </strong>Login Failed</p></div></center>';
			}
		}
		else
		{
			echo '<center><div class="alert red "><p><strong>Error!:</strong><br />';
			foreach($errors as $error)
			{
				echo '-'.$error.'<br />';
			}
			echo '</div></center>';
		}
	}
}else{
header('location: order.php');
}

?>

<body class="centered"> 
		<div id="registerBody">
		<header><h1>P & T's Pizza Emporium</h1></header>
		<div class="move"><br/>
		Enter Username<span style="padding-left: 5px;"><input type="text" for Username: id="username" name="username"/><br/></span>
		Enter Password&nbsp;&nbsp;<span style="padding-left: 3px;"><input type="password" for Password: id="password" name="password"/></span>
		<!-- Confirm Password<input type="password" for Password: id="confirmPassREG"/> -->
		<div id="regButton">
			<button name="loginButton" id="loginButton" class="btn" type="submit" />Login
			<a href="register.php"> <button id="registerButton" type="submit" class="btn" style="text-decoration:none" />Register</a>
		</div>
	</div></div>
	</form>
</body>
</html>


