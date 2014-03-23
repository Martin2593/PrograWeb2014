$(document).ready(//define todas las funciones cuando el documento esta listo,completamente descargado
          function(){//declaramos una funcion implicita
              

$('#x').fadeTo("fast", 0.0);
                   $('#comenzar').click(
                      function()
                           {

                            var profundidad=parseInt($('#profundidad').val());
                            var sube=parseInt($('#subir').val());
                            var resbala=parseInt($('#bajar').val());
                            var termina=0;
                            var dia=0;
                            var duracion=sube*1000;
                           // alert(resbala);
                            var i=0;
                            var nueva_profun=((sube*300)/profundidad);
                            if(profundidad>resbala)
                              {
                               if(sube>=profundidad)
                                  {
                                   $('#caracol1').animate({ marginBottom:0 });
                                   dia++;
                                   alert("Caracol subio a la cima :)"+"en el dia"+dia);
                                  }
                                  else
                                  {
                                    var myVar = setInterval(function(){myTimer()},duracion);
                                    function myTimer()
                                     { 
                                        if (i==0)
                                         { 
                                            $('#caracol1').animate({ marginBottom:nueva_profun });
                                            $('#eren').fadeTo("fast", 0.0);//sol se esconde
                                            $('#x').fadeTo("fast", 1.0);//sale la luna
                                            i++;
                                            termina=termina+sube;
                                         }
                                         else
                                         { 
                                            nueva_profun=nueva_profun+((resbala*300)/profundidad);
                                            $('#caracol1').animate({ marginBottom:nueva_profun});
                                            $('#x').fadeTo("fast", 0.0);//luna se esconde
                                            $('#eren').fadeTo("fast", 1.0);//sale el sol
                                             i = 0; 
                                            termina=termina-resbala;
                                            dia++;
                                            nueva_profun=nueva_profun-((sube*300)/profundidad);
                                         } 

                                      if(parseInt(termina)>=profundidad)
                                         {
                                           alert("Caracol subio a la cima :)"+"en el dia"+dia);
                                         }
                                      }  
                                   } 
                               }
                               else 
                                  alert("La profundidad es menor a los metros que resbala,verifique!!:) ")
                         }); 
          }
);//llamada a metodos $
//ayuda a tiempo de procesamiento del servidor,
