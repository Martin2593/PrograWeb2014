$(document).ready(
	function(){
		$('#luna').fadeTo("fast",0.0);
		
		var j=0;
		$("#dias").val("");
		$("#sube").val("");
		$("#baja").val("");
		
		
		for(j=1;j<=11;j++)
		{
			$('#t'+j).fadeTo("fast",0.0);
		}
		j=11;
		$('#aceptar').click(
			
					function(){	

						var dia=parseInt($("#sube").val(),10)*1000;
						var p = parseInt($("#profundo").val(),10);
						var s = parseInt($("#sube").val(),10);
						var ba = parseInt($("#baja").val());
						var dias=1;
						$("#dias").val(dias);
						if(ba<s&&ba!=0&&s!=0)
						{

						
						var i=1;
						var contador=0;
						var bandera=0;
						var a=12;
						var b=13;
						
						var myVar=setInterval(function(){myTimer()},dia);
         
						function myTimer(){				

						if(i==0)
						{
							$('#sol').fadeTo("fast",1.0);
							$('#luna').fadeTo("fast",0.0);
							i=1;
							contador=0;
							dias++;
							$("#dias").val(dias);
							
						}
						else
						{
							$('#sol').fadeTo("fast",0.0);
							$('#luna').fadeTo("fast",1.0);
							i=0;
							contadorn=0
						}
								
						}
						var myVar=setInterval(function(){myTimer2()},1000);
         
						function myTimer2(){				

						if(i==1)
						{
							a--;
							b--;
							$('#t'+a).fadeTo("fast",1.0);
							$('#t'+b).fadeTo("fast",0.0);
							contador=1;

							
						}
							
						if(i==0&&contador<=ba)
						{
							
							$('#t'+a).fadeTo("fast",0.0);
							$('#t'+b).fadeTo("fast",1.0);
							a++;
							b++;
							contador++;
						}	
						if(a==0&&bandera==0)
						{
							$('#t'+a).fadeTo("fast",0.0);
							alert("El caracol pudo salir");
							b=0;
							bandera=1;								
						}
						}

					}
					else
						alert("EL caracol no saldra nunca con esos datos");
					});
		
				
				}

);