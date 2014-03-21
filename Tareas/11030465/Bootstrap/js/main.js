$(document).ready(
	function(){
		$('img').click(
					function(){
						$(this).hide (200);
					}
			);
		$('#btn1').click( //el signo de # es para un id
					function(){
						$('img').show(200);
					}
			);
	}
);
