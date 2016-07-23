$(document).ready(function(){
	console.log("inside charts.js lib");
	google.charts.load('current', { 'packages' : ['timeline']}	);
	google.charts.setOnLoadCallback(drawChart);
});