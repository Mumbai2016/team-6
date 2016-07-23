$(document).ready(function(){
	console.log("here");
	var set_url_for_fetch = "../../PM/fetch.php";
	google.charts.load('current', {'packages':['timeline']});
	$.ajax({
		type : "POST",
		url : set_url_for_fetch,
		data : "functionName=returnActivityDetails",
		success: function(response){
			console.log("data successfull sent\n waiting for response");
			// console.log(response);
			var json_ret = $.parseJSON(response);
			console.log(json_ret);
			console.log(json_ret.a);
			for( var i=0; i<json_ret.a ; i++){
				var div_id = "d_"+ i.toString();
			}

		},
		error : function(err){
			console.log(err);
		}
	})

});