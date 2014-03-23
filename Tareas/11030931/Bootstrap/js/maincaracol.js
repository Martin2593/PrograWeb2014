$(document).ready(
	function(){
		$('#luna').fadeTo("fast",0.0);
		var i=0;
		$('#aceptar').click(
					function(){			
								
						
						
						var myVar=setInterval(function(){myTimer()},1000);
         
						function myTimer(){				

						if(i==0)
						{
							$('#sol').fadeTo("fast",1.0);
							$('#luna').fadeTo("fast",0.0);
							i=1;
						}
						else
						{
							$('#sol').fadeTo("fast",0.0);
							$('#luna').fadeTo("fast",1.0);
							i=0;
						}
								
						}
				
			});
	}
);