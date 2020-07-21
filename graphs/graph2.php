<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html>
<head>
<?php

include '../functions.php';
$sesuser = @$_SESSION['username'];

	if(!loggedin())
	{
		header("Location: ../blockedarea.php");
		exit();
	}
	
?>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/> 
<title>Activity</title>
<!-- JS -->
<script type="text/javascript" src="../js/jquery.js" ></script>
<script type="text/javascript" src="../js/highcharts.js" ></script>
<script type="text/javascript" src="../js/themes/gray.js"></script>
<script type="text/javascript" src="../js/logout.js"></script>
<script type="text/javascript" src="../js/graph2.js"></script>
<!-- JS -->
<link href="../layout.css" rel="stylesheet" type="text/css">

	<!-- Log out menu -->
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


</head>
<body>

<div class= "header">MINT</div>
<div class= "header2">Minimally Intrusive Network Tracking</div>

<!-- dropdown menu -->
<nav>
	<ul>
		<li><a href="../index.php">Home</a></li>
		<li><a href="#">Graphs</a>
			<ul>
				<li><a href="graph0.php#position">Hour Graph</a></li>
				<li><a href="graph1.php#position">Day Graph</a></li>
				<li><a href="graph2.php#position">Week Graph</a></li>
			</ul>
		</li>
		<li><a href="../description.php">Tech Description</a></li>
		<li><a href="../contact.php">Contact Us</a></li>
	</ul>
</nav>

<!-- week graph section -->
<div id= "wrapper_graphs">
	<div id= "left" >
	<span id="position">
		<div id= "containerLG" >
		<h3>Week Graph</h3>
		<p>This is a graph of the activity in a <strong>Week</strong>. This graph is updated every day. <strong>Click</strong> and drag to zoom in. <strong>Click</strong> a day to see more information.</p>
			<br/>
		<div id="container" style="width: 650px; height: 430px; margin: 0 auto"></div>
		
		</div>
	</span>
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
		<li><a href="http://www.nuigalway.ie/index.html"><img  src="../pictures/pic2.jpg" height="100" width="440" alt="Image Error"/></a></li>
	</div>

</body>
</html>

