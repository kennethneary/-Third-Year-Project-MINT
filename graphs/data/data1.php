<?php
// conect to database
$con = mysql_connect("localhost","pi","kieranpi");

	if (!$con) {
	  die('Could not connect: ' . mysql_error());
	}

	mysql_select_db("bfsdemo", $con);
	
	// get table name to query from location table in database
	$dir = mysql_query("SELECT location FROM location_table WHERE location_table.id=2");
	$location = mysql_fetch_array($dir);
	$table = $location['location'];
	$table = strtolower($table);
	
	$result = mysql_query("SELECT * FROM $table");
	
	// while there are still rows in table echo out selected data
	while($row = mysql_fetch_array($result)) {
	  echo $row['timespan'] . "\t" . $row['visits']. "\n";
	}

// close connection	
mysql_close($con);
?> 