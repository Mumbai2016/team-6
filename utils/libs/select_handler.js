$(document).on("change", "#select_pa", function(e){
	var n = prompt("Enter the number of strategies");
	console.log("value changed");
	var element = $("#enter_text_here");
	console.log(n);
	if(n!=null){
		for($i =0;$i<n;$i++){
			console.log("here");
			$(element).append("<br>");
			$(element).append('<input type="text" placeholder="Enter Strategy"> &nbsp;');
			// $(element).append('<button class="btn btn-default" type="button"></button>');
			$(element).append('<input type="button" name=button_'+String($i)+' value="GO!" class="btn btn-default" onclick="process_activity(this);">');
			var t = "_strategy_"+String($i);
			$(element).append("<div id="+t+"></div>");
                          
			$(element).append("<br>");
		}
	}



});



function process_activity(x){
	console.log(x);
	var n = prompt("Enter number of activity");
	console.log(n);
	if (n!= null){
		var y = x.name.split("_",-1)[1];
		console.log(y);
		var element = $("#_strategy_"+String(y));
		for ($i=0;$i<n;$i++){
			console.log("here");
			$(element).append("<br>");
			var name = y + "_activity_" + String($i);
			var name_button = y + "_button_" + String($i);
			console.log("name of activity input " + name);
			console.log("name of activity button " + name_button);
			$(element).append('<input type="text" name='+name+' placeholder="Enter Activity"> &nbsp;');
			// $(element).append('<button class="btn btn-default" type="button"></button>');
			$(element).append('<input type="button" name='+name_button+' id='+name_button+'   value="GO!" class="btn btn-default" onclick="process_projects(this);">');
                          
			$(element).append("<br>");			
		}
	}
}

function process_projects(x){
	console.log(x);
	var n = prompt("Enter projects");
	console.log(n);
	if (n!=null){
		var current_go_button_firstzero = x.name.split("_")[0];
		var current_go_button_secondzero = x.name.split("_")[2];
		var element_name = current_go_button_firstzero+"_button_"+current_go_button_secondzero;
		console.log(element_name);
		var element = $("#"+x.name);
		console.log(element);
		for($i=0;$i<n;$i++){
			console.log($i);
			$(element).parent().append("<br>");
			var name = "_project_" + String($i);
			// debugger(name);
			$(element).parent().append('<input type="text" name='+name+' placeholder="Enter Project"> &nbsp;');
			$(element).parent().append("<br>");			


		}
	}

}