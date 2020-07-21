<!DOCTYPE html PUBLIC "-//W3C//DD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
<head>
<title>MINT</title>
<!-- CSS -->
<link href="layout.css" rel="stylesheet" type="text/css">
<!-- JS -->
<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript" src="js/login.js"></script>
<script type="text/javascript" src="js/logincheck.js"></script>

<!-- Log in / log out menu -->
<?php
include 'functions.php';

	if(loggedin())
	{
		header("Location: index.php");
		exit();
	}
?>
		
	<div id="log_wrapper">
  
		<a href="#" class="login_btn"><span>Log in </span></a>
		<div id="login_box">
			<div id="tab"><a href="#" class="login_btn"><span>Log in </span></a></div>
			<div id="login_box_content">
				<form  id="login_form" action="doLogin.php" method="POST">
					<label for="username">Username</label><br/>
					<input type="text" name="username" value="" id="username" size="20" /><br/>			
					<label for="password">Password</label><br/>
					<input type="password" name="password"  id="password" size="20" /><br/>		
					<div id="login_status" ></div>			
					<label id="rememberme_label">
						<input type="checkbox" name="rememberme" id="rememberme" checked/>Remember me	
					</label>
					<input type="submit" name="login" value="Log in" id="login" />
				</form>
			</div>
		</div>
	
	</div>

</head>
<body>

<div class= "header">MINT</div>
<div class= "header2">Minimally Intrusive Network Tracking</div>

<!-- dropdown menu -->
<nav>
	<ul>
		<li><a href="index.php">Home</a></li>
		<li><a href="#">Graphs</a>
			<ul>
				<li><a href="graphs/graph0.php">Hour Graph</a></li>
				<li><a href="graphs/graph1.php">Day Graph</a></li>
				<li><a href="graphs/graph2.php">Week Graph</a></li>
			</ul>
		</li>
		<li><a href="description.php">Description</a></li>
		<li><a href="contact.php">Contact Us</a></li>
	</ul>
</nav>


<div id= "wrapper_contact">
	<div id= "left" >
	<div id= "containerLD">

		<h3>Please log in!</h3>
		
		<p>You must be logged in to see this private content. Please log in or click <a href=index.php>here</a> to go back!</p>
		
	</div>
	</div>
	
	
</div>
	<!-- footer section -->
	<div id="footer">
		<p>
			<a href="mailto:k.neary1@nuigalway.ie" target="_blank">Kenneth Neary</a> | 
			<a href="mailto:k.fleming2@nuigalway.ie" target="_blank">Kieran Fleming</a> |
			<a href="mailto:c.bleach1@nuigalway.ie" target="_blank">Colin Bleach</a> |
			<a href="mailto:c.wright1@nuigalway.ie" target="_blank">Conor Wright</a> |
			<a href="mailto:m.morgan4@nuigalway.ie" target="_blank">Mick Morgan</a>
		</p>
	<div>
	<div id="foot">
		<li><a href="http://www.nuigalway.ie/index.html"><img  src="pictures/pic2.jpg" height="100" width="440" alt="Image Error"/></a></li>
	</div>

</body>
</html>
		 
	
