<!DOCTYPE html PUBLIC "-//W3C//DD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
<head>
<title>MINT</title>
<!-- CSS -->
<link href="layout.css" rel="stylesheet" type="text/css">
<!-- JS -->
<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript" src="js/login.js"></script>
<script type="text/javascript" src="js/logout.js"></script>
<script type="text/javascript" src="js/logincheck.js"></script>

<!-- Log in / log out menu -->
<?php
	include 'functions.php';
	if(loggedin()){
?>
	
	<div id="log_wrapper">
		<a href="#" class="logout_btn"><span>Log out</span></a>
		<div id="logout_box">
			<div id="tab1"><a href="#" class="logout_btn"><span>Log out</span></a></div>
			<div id="logout_box_content">
				<div  id="logout">
					<h4>Are you sure you want to<br/> log out?</h4>
					<input id="logout_yes"  type="submit" name="Yes" value="Yes"/>
					<input id="logout_no" type="submit" name="No" value="No"/>	
				</div>
			</div>
		</div>	
	</div>

<?php } else { ?>
	
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

<?php }?>

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
			<li><a href="description.php">Tech Description</a></li>
			<li><a href="contact.php">Contact Us</a></li>
		</ul>
	</nav>

	<!-- video and picture links section -->
	<div id= "wrapper_index">
		<div id= "left" >
			<div id= "containerLD_index" >
				
				<p>
					MINT was designed as part of a NUIG third year project by five <br/>Electronic Engineering students as a <strong>Home Monitoring Solution</strong>.
					MINT records activity of a doorway, notifies an App, and generates graphs to show the data in the simplest way possible.
				</p>
				<div id= "vid">
					<iframe width="460" height="300" src="http://www.youtube.com/embed/pHRDmBleOMk"  frameborder="0" allowfullscreen></iframe>
				</div>
				<div id="pic_menu">
					<a href="description.php#Door Sensor"><img  src="pictures/pic9.jpg" alt="Image Error" height="140" width="140" title="Door Sensor"/></a>
					<a href="description.php#Control Unit"><img  src="pictures/pic3.jpg" alt="Image Error" height="140" width="140" title="Control Unit"/></a>
					<a href="description.php#Website"><img  src="pictures/pic7.jpg" alt="Image Error" height="140" width="140" title="Website"/></a>
					<a href="description.php#Android_App"><img  src="pictures/pic5.gif" alt="Image Error" height="140" width="140" title="Android App"/></a>
				</div>
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