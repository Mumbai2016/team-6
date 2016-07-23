<?php 
	// this file contains all functions for all sorts of ajax requests
	// please write the function name appropriately
	
	$functionName = filter_input(INPUT_POST, "functionName");
	if($functionName == "returnActivityDetails"){
		returnActivityDetails();
	}
	function returnActivityDetails(){
		$arr = array('a'=>'5','b'=>'2');
		echo json_encode($arr);
	}

	
	
 ?>