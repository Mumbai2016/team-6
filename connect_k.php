<?php

	// $hostname="ec2-54-179-135-255.ap-southeast-1.compute.amazonaws.com";
	$hostname="127.0.0.1";
	$username1="root"; //username for database
	$password1="root"; //database password
	$dbname="atma6"; //database name
	
	// @$connect = mysql_connect($hostname,$username,$password) or die("Error Connecting"); //make connection
	// mysql_select_db($dbname); //select database

	$cxn = new mysqli($hostname, $username1, $password1, $dbname);	
	
?>
