<!DOCTYPE HTML> 
<html>
<head>
<style>
.error {color: BLUE;}
</style>
</head>
<body> 

<?php

include '../connect.php';
// define variables and set to empty values
$name=$_POST['name'];
$country=$_POST['country'];
$date=$_POST['dob'];
$duration=$_POST['duration'];
$bachelors=$_POST['option'];
$sql="INSERT INTO `atma6`.`form` (`name`, `country`, `birth`, `duration`, `bachelors`,app_status) VALUES ('$name', '$country', '$date', '$duration', '$bachelors',1)";
mysql_query($sql);
header('Location:../UI/ui');
?>
Values Inserted
</body>
</html>
