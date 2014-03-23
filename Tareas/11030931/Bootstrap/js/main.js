$(document).ready(
	function()
				{

					//$('img').hide(1000);
					$('img').click(
						function(){

							$(this).hide(1000);

						}

						);

					$('#btn1').click(
						function(){

							$('img').show(1000);

						}

						);

					var contador=1; 
					var num=9; 
					var myVar=setInterval(function(){myTimer()},1000);
					function myTimer(){ 

						if (contador<num) 
						$('#baraja').attr('src','img/baraja/'+contador+'.jpg');
						contador++;
				                       }


	


				}

	);