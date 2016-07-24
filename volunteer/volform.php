<html>
<head>
<title>Volunteer Progress Tracking</title>
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>

<style>

.table th,td {
   text-align: center;   
}
h2 { text-align: center;   }

</style>

</head>

    <form action="volform.php" method="post">
<body>

<div class="container">
  <h2>Pending Tasks</h2>
  <div class="table-responsive">          
  <table class="table">
  
    <thead>
      <tr>
     <th>Task Name</th>
     <th>Completed</th>
         </tr>
    </thead>
    <tbody>
      <tr>


        <td>SOP</td>
        <td> <label><input type="checkbox" name="s1" value="SOP"></label></td>
      </tr>
	  <tr>
        <td>Teaching workshop</td>
        <td> <label><input type="checkbox" name="s1" value="Teaching workshop"></label></td>
      </tr>
	  <tr>
        <td>Sponsor Seminar</td>

        <td> <label><input type="checkbox" name="s1" value="Sponsor Seminar"></label></td>
      </tr>
    </tbody>
	
  </table>
  </div>
</div>

 <br>
 <center><input type="submit" value="SUBMIT" name="submit"></input></center>
 </form>

 <?php
      if(isset($_POST['submit'])){
          $one = $_POST['s1'];
          $two = $_POST['s2'];
          $three = $_POST['s3'];
          $avg = ($one + $two + $three + $four )/ 4;
          $dbhost = 'localhost';
          $dbuser = 'root';
          $dbpass = '';
           $ngo_id = 0;
           $u_id=1;
           $conn = mysqli_connect($dbhost, $dbuser, $dbpass,'atma6');
           if(! $conn )
           {
             die('Could not connect: ' . mysqli_error($conn));
           }
           echo 'Connected successfully';

           $sql = "INSERT INTO feedback (f_uid, f_ngoid, f_value) VALUES (".$u_id.", ".$ngo_id.",".$avg.")";

            if ($conn->query($sql) === TRUE) {
              echo "success";
            }

      }
 ?>

</body>
</html>
