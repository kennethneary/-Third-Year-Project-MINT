<?php
	include 'functions.php';

	$is_ajax = @$_REQUEST['is_ajax'];
	if(isset($is_ajax) && $is_ajax)
	{
		// get username, password and remember me from AJAX
		$username = @$_REQUEST['username'];
		$password = @$_REQUEST['password'];
		$rememberme = @$_REQUEST['rememberme'];
		
		// if username and password entered
		if($username&&$password)
		{
			// select all from demo database where column username is eqauled to the entered value	
			$login = mysql_query("SELECT * FROM demo WHERE username='$username'");
			$nunrows = mysql_num_rows($login);
		
			// if username exists
			if($nunrows)
			{
				// get associated data
				while( $row = mysql_fetch_assoc($login) )
				{
					// get database password and check if equal to entered password
					$db_password = $row['password'];
					if( $password == $db_password )
					{
						$login_ok = TRUE;				
					}
					else
					{
						$login_ok = FALSE;						
					}
					
					// if username and password match that stored in database
					if ($login_ok == TRUE)
					{
						if($rememberme == "on")
						{
							// set cookie
							setcookie("username", $username, time()+ 86400);
						}
						else if($rememberme == "")
						{
							// create session
							$_SESSION['username'] = $username;
						}
				
						// send message back to AJAX
						echo "success";
						exit();
					}
					else
					{
						echo "error1";
					}
				}		
			}
			else
			{
				echo "error1";
			}
		}
		else
		{
			echo "error2";
		}
	}
	
?>