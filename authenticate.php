<?php session_start();
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
			session_start();
			while ($row = $result->fetch_assoc()) {
				# code...
				$usertype = $row["u_type"];
				$userid = $row["userid"];
				//print_r($row);
				echo "usertype  ".$usertype;
				$_SESSION['userid']= $row['uid'];
				if ($usertype == 1){
				echo '1';
					$_SESSION['user_type'] = $usertype;
					header("location:./PM/index.php");
				}else if($usertype == 2){
					echo '2';
					$_SESSION['user_type'] = $usertype;
                    $userid = $row["userid"];
                    $_SESSION['userid'] = $userid;
					header("location:./UI/ui/index_2.php");
				}else if ($usertype == 0){
						echo '0';
                    $userid = $row["userid"];
                    $_SESSION['userid'] = $userid;
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
