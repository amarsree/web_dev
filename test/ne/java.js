$("#but").click(function(){
 status=$("#name").val();
 status1=$("#name1").val();
	$.ajax({
		type: "POST",
		url : "text.php",
		data: {status: status,status1: status1},
		success: function(a,a1){
		$("#div").html(a),
		$("#div1").html(a1);
		}
	}).error("error");
})	