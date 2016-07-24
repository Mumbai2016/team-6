
<?php 

	// this file is only for authentivction purposes
	// 
	// 
	// 
	// 
	if(isset($_POST['submit'])) {
		# code...
		extract($_POST);
		print_r($_POST);

		include 'connect_k.php';
    		$username =$_POST['username'];
		$password = $_POST['password'];    
        #$username= mysqli_real_escape_string($cxn,$username);
        #$password= mysqli_real_escape_string($cxn,$password);
        $type= $_POST['ddl'];
		$sql = "SELECT * FROM `user` WHERE `uname`='$username' and `u_pwd` = '$password' and `u_type`=$type" ;
		echo $sql;
		//$result = $cxn->query($sql);
		$result = mysqli_query($cxn,$sql);		
//echo $sql;
		//print_r($result);
		if($result->num_rows > 0){

			while ($row = $result->fetch_assoc()) {
				# code...
				$usertype = $row["u_type"];
				//print_r($row);
				echo "usertype  ".$usertype;
				if ($usertype == 1){
				echo '1';
					$_SESSION['user_type'] = $usertype;
					header("location:./UI/ui/index_1.php");
				}else if($usertype == 2){
					echo '2';
					$_SESSION['user_type'] = $usertype;
					header("location:./UI/ui/index_2.php");
				}else if ($usertype == 0){
						echo '0';
					$_SESSION['user_type'] = $usertype;
					header("location:./UI/ui/index_0.php");
				}
			}
		}else{
			echo 'No results found';	
			echo mysqli_error($cxn);
		}
		$cxn->close();

		
	}

 ?>
