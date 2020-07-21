<?php
	
	// tell sever to sleep so that processing message in javascript is shown
	sleep(3);
	
	// get name, email and message from AJAX
	$name = @trim($_POST['name']);
	$email = @trim($_POST['email']);
	$message = @trim($_POST['message']);
	
		// email format
		$email_to = "mint@gmail.com";
		$email_from = "MINT";
	
		$headers = 'MIME-Version: 1.0' . '\n';
		$headers .= 'From: '.$email_from . '\n';
		$subject = 'Contact From Submission\n';
		$body = 'Name: '.$name . '\n';
		$body .= 'Email: '.$email . '\n';
		$body .= 'Message: '.$message . '\n';
	
		//send email
		if(@mail($email_to, $subject, $body, $headers))
		{		
			$return['error'] = false;
			$return['msg'] = "Thank you for contacting us about MINT. We will be in touch with you shortly ".$name;
			echo json_encode($return);
		}
		else
		{
			$return['error'] = true;
			$return['msg'] = "There was a problem sending your email. Please use the information below and contact us directly";
			echo json_encode($return);
		}
		
?>




