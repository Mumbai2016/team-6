<?php 

	// this file is only for authentivction purposes
	// 
	// 
	// 
	// 
	if (isset($_POST)) {
		# code...
		extract($_POST);
		print_r($_POST);
		include 'connect.php';
		$sql = "SELECT * FROM `user` WHERE 1";
		$result = mysqli_query($cxn,$sql);
		echo "as";
	}

 ?>