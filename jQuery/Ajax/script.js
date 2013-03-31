$(document).ready(function(){
	$("button").click(function(){
		$.get("tableonly.php", function(result){
			$("#fortable").html(result);
		});
	});
});