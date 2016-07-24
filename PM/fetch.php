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
		include '../connect_k.php';
		$x = 1;
		$sql = "SELECT * FROM `p_vol` WHERE `p_uid`=$x";
		$result = $cxn->query($sql);
		echo $sql;
		print_r($result);
		if($result->num_rows > 0){

			while ($row = $result->fetch_assoc()) {
				# code...
				$usertype = $row["p_uid"];
				print_r($row);
				
			}
		}else{
			echo "problem";
		}
		$cxn->close();
		header('location:./');

		
	}

 ?>