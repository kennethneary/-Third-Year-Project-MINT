<?php
	
	session_start();
	
	//destroy session
	session_destroy();
	
	//unset cookies
	@setcookie("username", $username, time()-86400);
	
	// redirect browser to index page
	header("Location: index.php");


?>