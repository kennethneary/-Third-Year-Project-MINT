<?php
	
	// start session
	session_start();
	

	// connect to database
	mysql_connect("localhost","pi","kieranpi") or die();
	mysql_select_db("user") or die();
	
	// login check function
	function loggedin()
	{
		if( isset($_SESSION['username']) || isset($_COOKIE['username']) )
		{
			$loggedin = TRUE;
			return $loggedin;
		}
	}
	
	
?>
