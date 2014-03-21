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
		var c=1;
		var num=9;
		var myVar=setInterval(function(){myTimer()},2000);
         
			function myTimer(){
				 if(c<=num)
				$('#baraja').attr('src','img/l'+c+'.jpg');
				c++;
				}
	}
);
