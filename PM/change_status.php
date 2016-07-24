<?php
include '../connect.php';
if(isset($_POST['submit']))
{
		$uniqueid=$_POST['unique_id'];
		$newstatus=$_POST['new_status'];
		$sql="UPDATE `form` SET `app_status`=$newstatus WHERE avid=$uniqueid";
		mysql_query($sql);
		header ('Location:index.php');
}