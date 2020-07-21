<?php
// conect to database
$con = mysql_connect("localhost","pi","kieranpi");

	if (!$con) {
	  die('Could not connect: ' . mysql_error());
	}
	
	mysql_select_db("bfsdemo", $con);

	// select the last 7 days of data for week graph
	$result = mysql_query("SELECT * FROM (SELECT * FROM week ORDER BY id DESC LIMIT 7) temp ORDER BY temp.id ASC");
	
	// while there are still rows in table echo out selected data
	while($row = mysql_fetch_array($result)) {
	  echo $row['timespan'] . "\t" . $row['visits']. "\n";
	}

// close connection	
mysql_close($con);
?> 