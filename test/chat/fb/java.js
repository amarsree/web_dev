$(document).ready(function(){alert();

		$('.chat_head').click(function() {
		$('.wrap').toggle("fast");	
		});
		
		$('textarea').keypress(
		function(e){
		if(e.keyCode == 13){

		var msg = $(this).val();
		$(this).val('');
		$("<div class='msg_b'>"+msg+"</div>").insertBefore('.msg_insert');
		$('.chat_body').scrollTop($('.chat_body')[0].scrollHeight);
	//	$('.msg_insert').load('data.php')
		}
		})
	});