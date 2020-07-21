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
				<div id="logout">
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




<!-- Description section -->
<div id= "wrapper_description">
	<div id= "left" >
		<div id= "containerLD" >
		
		<h3>Description...</h3>
			<p> In this section we will guide you through the different aspects of MINT.
				<br/>MINT can be broken down into four main sections. These are: 
			</p>
			<div id= "left" >
			<div id= "emailaddress"> 
				<ul>
					<li><a href= "#Door Sensor">Door Sensor </a></li>
					<li><a href= "#Control Unit">Control Unit </a></li>
					<li><a href= "#Website">Website </a></li>
					<li><a href= "#Android_App">Android App </a></li>
				</ul>
			</div>
			</div>
			
			<div id= "right" >
				<div style="margin-right:15px; ">
					<img  src="pictures/pic1.jpg" alt="Image Error" height="230" width="450"/>
				</div>
			</div>
		
		</div>
		
		
		<span id="Door Sensor">
		<div id= "containerLD" >
		<h3>Door Sensor</h3>
			<p> The Door Sensor consists of two boxes attached to the front of a door frame.
				An infra-red beam is transmitted between the boxes. When a person walks through the door
				the beam is broken. 
			</p>
			<div style="margin-left:170px;">
					<img  src="pictures/pic4.jpg" alt="Image Error" height="250" width="340"/>
			</div>
			
		</div>
		</span>

		<span id="Control Unit">
		<div id= "containerLD" >
			<h3>Control Unit</h3>
			<p> 
				The Control Unit is a Raspberry Pi which hosts a LAMP (Linux, Apache, MySQL, PHP) web server. It processes the information recieved from the Door Sensor. 
				
			</p>
			
			<div style="margin-left:150px;">
					<img  src="pictures/pic3.jpg" alt="Image Error" height="250" width="380"/>
			</div>
		</div>
		</span>
		
		<span id="Website">
		<div id= "containerLD" >
			<h3>Website</h3>
			<p> 
				The server updates the website hosted on it. When logged in the user can view graphs showing the activity of
				Door Sensor over a peroid of time.

			</p>
			
			<div style="margin-left:150px;">
					<img  src="pictures/pic7.jpg" alt="Image Error" height="270" width="380"/>
			</div>
		</div>
		</span>
		
		<span id="Android_App">
		<div id= "containerLD" >
			<h3>Android App</h3>
			<p> 
				The App notifies the user on the Door Sensors activity. The App recieves new information 
				from the Door sensor via the websites RSS Feed. 
			</p>
			<div style="margin-left:140px;">
					<img  src="pictures/pic5.gif" alt="Image Error" height="250" width="380"/>
			</div>
		</div>
		</span>
		
		<div id= "containerLD" >
			<h3>Overview</h3>
			
			<div style="margin-left:35px;">
					<img  src="pictures/pic6.jpg" alt="Image Error" height="300" width="590"/>
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