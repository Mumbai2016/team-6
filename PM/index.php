<?php

	include 'libs.php';
	

  ?>
	
	<script   src="https://code.jquery.com/jquery-1.12.4.min.js"   integrity="sha256-ZosEbRLbNQzLpnKIkEdrPv7lOy9C27hHQ+Xp8a4MxAQ="   crossorigin="anonymous"></script>
	<html>
  <head>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>

    <script type="text/javascript">
    	$("#accordion_element").accordion();

    </script>

    <script type="text/javascript">
      google.charts.load('current', {'packages':['timeline']});
      google.charts.setOnLoadCallback(drawChart);
      function drawChart() {
        var container = document.getElementById('timeline');
        var chart = new google.visualization.Timeline(container);
        var dataTable = new google.visualization.DataTable();

        dataTable.addColumn({ type: 'string', id: '' });
        dataTable.addColumn({ type: 'date', id: 'Start' });
        dataTable.addColumn({ type: 'date', id: 'End' });
        dataTable.addRows([
          [ 'NGO 1', new Date(2012, 3, 30), new Date(1797, 2, 4) ],
          [ 'NGO 2',      new Date(1797, 2, 4),  new Date(1801, 2, 4) ],
          [ 'NGO 3',  new Date(1801, 2, 4),  new Date(1809, 2, 4) ]]);

        chart.draw(dataTable);
      }
    </script>
  </head>


	<body>
		<div id = "accordion_element">
		<!-- list all the projects here,   -->
			
		</div>
		<div id="timeline" style="height: 180px;"></div>
	</body>
