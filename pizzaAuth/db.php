<?php
//this is what is used to connect the mysql database

//usually always localhost unless your databse is on a different server
define('DB_HOST', 'psychotiic2012.ps.funpicsql.de');
//the database name
define('DB_NAME', 'mysql1172981'); //and this
//mysql database username
define('DB_USERNAME', 'mysql1172981'); //and this to what
//mysql database username's password
define('DB_PASSWORD', 'password'); // is that what you meant to change? to match funpic?

//the mysql connection via the PDO 
$odb = new PDO('mysql:host=' . DB_HOST . ';dbname=' . DB_NAME, DB_USERNAME, DB_PASSWORD);
$user = new user;
class user
{
	function LoggedIn()
	{
		@session_start();
		if (isset($_SESSION['username'], $_SESSION['ID']))
		{
			return true;
		}
		else
		{
			return false;
		}
	}
	}
?>