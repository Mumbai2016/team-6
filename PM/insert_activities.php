<?php include '..\connect.php';?>
<h1> PM INSERT FORM </h1>
<select>
<?php
	$sql_get_paid='select * from priority_areas';
	$result=mysql_query($sql_get_paid);
	while ($row=mysql_fetch_array($result))
	{
		echo '<option value="'.$row[0].'">'.$row[1].'</option>';
		
	}
?>
</select>

<select>
<?php
	$sql_get_sid='select * from strategy_category';
	$result=mysql_query($sql_get_sid);
	while ($row=mysql_fetch_array($result))
	{
		echo '<option value="'.$row[0].'">'.$row[1].'</option>';
		
	}
?>
</select>