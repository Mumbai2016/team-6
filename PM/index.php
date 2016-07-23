<html>

  <head>
  	<script src="https://code.jquery.com/jquery-1.12.4.js"></script>

	<script src="https://code.jquery.com/ui/1.12.0/jquery-ui.js"></script>
	<link rel="stylesheet" href="//code.jquery.com/ui/1.12.0/themes/base/jquery-ui.css">
	<script type="text/javascript">
		$(function(){
			$("#accordion_element").accordion({
					header:'h3',
					collapsible:true,
					active:false
			});
		})	

	</script>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['timeline']});
      google.charts.setOnLoadCallback(drawChart);
      function drawChart() {
        var container = document.getElementById('timeline');
        var chart = new google.visualization.Timeline(container);
        var dataTable = new google.visualization.DataTable();

        dataTable.addColumn({ type: 'string', id: 'President' });
        dataTable.addColumn({ type: 'date', id: 'Start' });
        dataTable.addColumn({ type: 'date', id: 'End' });
        dataTable.addRows([
          [ 'Project 1', new Date(1789, 3, 30), new Date(1797, 2, 4) ],
          [ 'Project 2',      new Date(1797, 2, 4),  new Date(1801, 2, 4) ],
          [ 'Project 3',  new Date(1801, 2, 4),  new Date(1809, 2, 4) ]]);

        chart.draw(dataTable);
      };

      

    </script>
  </head>
  <body>
  	<div id="accordion_element">
		<!-- list all the n here,   -->
			<h3>NGO 1</h3>
			<div>
				    <div id="timeline" style="height: 200px;"></div>

			</div>
			
		</div>

  </body>
</html>

    
   