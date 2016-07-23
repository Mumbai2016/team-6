<html>
<head>
<title>Project Details</title>
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>

<script src="http://code.jquery.com/ui/1.10.1/jquery-ui.js"></script>


<script>   
    $(function() {
         $( "#calendar" ).datepicker();   
    }); 
</script>


<style>

.table td {
   text-align: center;   
}

.table {
     margin-top: 100px;
	 padding: 50px;
}


</style>

</head>

<body>

<div class="container">
  
  <div class="table-responsive">          
  <table class="table">
  
   
    <tbody>
      <tr>
        <td>Project Name:</td>
        <td> <label> <input type="text" class="form-control" id="pname"></label></td>
      </tr>
	  <tr>
        <td>Volunteer ID:</td>
        <td> <label> <input type="text" class="form-control" id="vid"></label></td>
      </tr>
	  <tr>
        <td>Start Date:</td>
        <td> <label> <input type="text" id="calendar" /></label></td>
      </tr>
	   <tr>
        <td>End Date:</td>
        <td> <label> <input type="text" id="calendar" /></label></td>
      </tr>
	  
    </tbody>
	
  </table>
  </div>
</div>

</body>
</html>
