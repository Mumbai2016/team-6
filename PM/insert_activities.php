<?php include '..\connect.php';?>

<link rel="stylesheet" href="../utils/css/bootstrap.css">


<!-- Latest compiled JavaScript -->
<link rel="stylesheet" href="../utils/js/bootstrap.min.js">


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
<input name="activityname1" placeholder="Enter Activity Name">

<div class="container">
  <h2></h2>
  <!-- Trigger the modal with a button -->
  <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">Open Modal</button>

  <!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Modal Header</h4>
        </div>
        <div class="modal-body">
          <p>Some text in the modal.</p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>
  
</div>

<br>


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

<input name="activityname2" placeholder="Enter Activity Name">
<button name="button2">Add Projects</button>
<br>
<button name="button_1">Add Activities</button>
