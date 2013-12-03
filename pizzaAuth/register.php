<?php 
//this starts the session for the users, like weather loged in an what not 
session_start();
require 'db.php';
?>
<!DOCTYPE html>
<html>
<head>
	<title>D & T's Pizza Emporium</title>
	<meta name="viewport" content="width=device-width, initial-scale=1" /> 
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<link rel="stylesheet" href="theme.css">
	<script type="text/javascript" src="index.js"></script>
	 <script src="./lib/jquery-1.10.1.js"></script>
   <!-- <script src="./lib/jqm/jquery.mobile-1.3.1.js"></script> -->
   <style type="text/javascript">
   .m {
      margin-top: 146cm;
    }
   </style>
	
</head>
<body class="centered">
<form method="post">
	<div id="registerBody">
	
		<?php
		if ($user -> LoggedIn())
		{
			header('Location: index.php');
			echo 'balls';
			die();
		}
		
		if (isset($_POST['registerButton']))
		{
			$username = $_POST['username'];
			$password = $_POST['password'];
			$errors = array();
			$checkUsername = $odb -> prepare("SELECT COUNT(*) FROM `user` WHERE `username` = :username");
			$checkUsername -> execute(array(':username' => $username));
			$countUsername = $checkUsername -> fetchColumn(0);
			/*if ($checkUsername > 0)
			{
				$errors[] = 'Username is already taken';
			} */
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
				$SQLCheckUser = $odb -> prepare("SELECT COUNT(*) FROM `user` WHERE `username` = :username");
				$SQLCheckUser -> execute(array(':username' => $username));
				$countUsername = $SQLCheckUser -> fetchColumn(0);
				if ($countUsername == 0) 
				{
					$insertUser = $odb -> prepare("INSERT INTO `user` VALUES(NULL, :username, :password)");
					$insertUser -> execute(array(':username' => $username, ':password' => $password));
					echo '<div class="nNote nSuccess hideit"><p><strong>SUCCESS: </strong>User has been registered.  Redirecting....</p></div><meta http-equiv="refresh" content="3;url=index.php">';
				}
				else
				{
					echo '<div class="nNote nFailure hideit"><p><strong>ERROR: </strong>Username is already taken</p></div>';
				}
			}
			else
			{
				echo '<div class="nNote nFailure hideit"><p><strong>ERROR:</strong><br />';
				foreach($errors as $error)
				{
					echo '-'.$error.'<br />';
				}
				echo '</div>';
			}
		}
		if (isset($_POST['cancelButton']))
		{
			header('location: index.php');
		}
		
		?>
	
		<header><h1>P & T's Pizza Emporium</h1></header>
		<div class="move"><h3> Become a new customer...</h3><br/>
		Enter Username<span style="padding-left: 5px;"><input name="username" type="text" for Username: id="usernameREG"/><br/></span>
		Enter Password&nbsp;&nbsp;<span style="padding-left: 3px;"><input name="password" type="password" for Password: id="passwordREG"/></span>
		<!-- Confirm Password<input type="password" for Password: id="confirmPassREG"/> -->
		<div id="regButton">
			<button name="registerButton" id="registerButton" class="btn" type="submit"  />Register
			<!--<button id="cancelButton" type="submit" class="btn" /><a href="./index.php"style="text-decoration:none"class="btn">Cancel</a>  -->
			<button name ="cancelButton" id="cancel" type="submit" class="btn"/ onclick="">Cancel</button><br/>
		</div>
		
	</div></div>
	</form>
</body>
</html>