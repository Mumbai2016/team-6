<?php

	$hostname="localhost";
	$username="root"; //username for database
	$password="root"; //database password
	$dbname="atma6"; //database name
	
	@$connect = mysql_connect($hostname,$username,$password) or die("Error Connecting"); //make connection
	 mysql_select_db($dbname); //select database

	//$cxn = new mysql($hostname, $username, $password, $dbname);	
	
?>