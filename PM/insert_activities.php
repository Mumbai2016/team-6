<?php 
	include '../connect_k.php';

	



	if(isset($_POST)  && !empty($_POST)){
		print_r($_POST);
		extract($_POST);
		
		// insert strategy into strategy
		// get sid and put in activity
		$strategy = $p_a;
		$paid = 1;
		$ngo_id=1;
		$sql1 = "INSERT INTO `strategy_category`(`sid`, `sname`) VALUES (NULL,'$strategy')";
		$ret = $cxn->query($sql1);
		print_r($ret);
		if ($ret) {
			# code...
			$insert_idx = $cxn->insert_id;
			print_r($insert_idx);
			$sql2 = "INSERT INTO `activity`(`aid`, `a_paid`, `a_sid`, `a_name`, `a_funds`) VALUES (NULL,'$paid','$insert_idx','$AA_0_activity_0','$AA_0_activity_0_number')";
			$r_ret= $cxn->query($sql2);
			$aidx = $cxn->insert_id;
			$sql3 = "INSERT INTO `projects`(`pid`, `aid`, `ngo_id`, `p_name`, `target_s_date`, `target_e_date`, `s_date`, `e_date`, `status`, `odid`) VALUES (NULL,'$aidx','$ngo_id','$AA__project_0_projectname','$AA__project_0projectDATESTART','$AA__project_0projectDATEEND',NULL,NULL,'not_started',$AA__project_0_projectOD)";
			echo $sql3;
			$r3_ret = $cxn->query($sql3);
			if($r3_ret){
				header('location:./');
			}

		}

		
	}else{
		echo "no post";
	}

 ?>