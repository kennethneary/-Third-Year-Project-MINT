<?php

// variable detailing what graph was selected is passed from AJAX 
$variable = @$_POST['variable'];

	if($variable){
		$con = mysql_connect("localhost","pi","kieranpi");
		
		// connect to database
		if (!$con) {
			die('Could not connect: ' . mysql_error());
		}
		
		// update location table
		mysql_select_db("bfsdemo", $con);
		mysql_query("UPDATE location_table SET id='2',location='highcharts_$variable' WHERE location_table.id=2");
		mysql_close($con);
		
		$return['success'] = true;
		echo json_encode($return);
		// echo message at end to make sure written to database complete
		// js in success function reload page to minute graphs
	
	}


?>
	