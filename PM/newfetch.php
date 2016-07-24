<?php 
	include '../connect_k.php';

	if(isset($_POST)){
		extract($_POST);
		var_dump($_POST);
		$q = "UPDATE `p_vol` SET `hours`=$update_hr WHERE `p_uid`=$pu_id";
		var_dump($q);
		$ret = $cxn->query($q);
		if($ret){
			echo "yes";
		}else{
			echo "no";
		}

	}	


 ?>