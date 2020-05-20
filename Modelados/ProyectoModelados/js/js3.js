 $(document).ready(function () {

            // Comprobar los checkbox seleccionados
            $('#verPlatillos').on('click', function () {
                var i=parseInt("0");

                var Platillos = new Array();
                Platillos.push('<h1>Seleccione su platillo...<h1/><h2>...y a cocinar</h2><br>');
                
                if (($("#9").is(':checked') == true) && ($("#37").is(':checked') == true) &&($("#7").is(':checked') == true)) {
                    Platillos.push("<div class='contenedor3'><img src='ImgCom/' width='150' height='150'><a href='Combinaciones/Sandwich'.php''></a></div>");
                    i++;
                } else {
                } if ($("#15").is(':checked') == true) {
                    Platillos.push("<div class='contenedor3'><img src='ImgCom/pescado.png' width='150' height='150'><br><a href='Combinaciones/Pescado.php'>Pescado a la plancha</a></div>");
                 i++; 
                } else { } if ($("#17").is(':checked') == true) {
                    Platillos.push("<div class='contenedor3'><img src='ImgCom/pescado.png' width='150' height='150'><br><a href='Combinaciones/Pescado.php'>Salmon a la plancha</a></div>");
                    i++; 
                } else { }  if ($("#3").is(':checked') == true) {
                   i++; 
                    Platillos.push("<div class='contenedor3'><img src='ImgCom/pollo-frito.png' width='150' height='150'><br><a href='Combinaciones/Ensalada-Pollo.php'>Pollo</a></div>");
                } else { } if (($("#4").is(':checked') == true) || ($("#7").is(':checked') == true)) {
                   i++; 
                    Platillos.push("<div class='contenedor3'><img src='ImgCom/huevo.jpg' width='150' height='150'><br><a href='Combinaciones/Huevo-jamon.php'>Huevo con jamon</a></div>");
                } else { } if (($("#4").is(':checked') == true) && ($("#8").is(':checked') == true)) {
                   i++; 
                    Platillos.push("<div class='contenedor3'><img src='ImgCom/huevosal.png' width='150' height='150'><br><a href='Combinaciones/Huevo-salchicha.php'>Huevo con salchicha</a></div>");
                } else { } if (($("#11").is(':checked') == true) && ($("#30").is(':checked') == true)) {
                   i++; 
                    Platillos.push("<div class='contenedor3'><img src='ImgCom/espagueti.png' width='150' height='150'><br><a href='Combinaciones/Espagueti.php'>Spaguetti con salsa de queso</a></tr>");
                } else { } if (($("#25").is(':checked') == true) && ($("#23").is(':checked') == true)) {
                   i++; 
                    Platillos.push("<div class='contenedor3'><img src='ImgCom/chilaquiles.jpg' width='150' height='150'><br><a href='Combinaciones/Chilaquiles.php'>Chilaquiles verdes</a></div>");
                } else { } if (($("#28").is(':checked') == true) && ($("#23").is(':checked') == true)) {
                   i++; 
                    Platillos.push("<div class='contenedor3'><img src='ImgCom/salsa.png' width='150' height='150'><br><a href='Combinaciones/Salsa-verde.php'>Salsa verde</a></div>");
                } else { } if (($("#16").is(':checked') == true) && ($("#19").is(':checked') == true)) {
                   i++; 
                    Platillos.push("<div class='contenedor3'><img src='ImgCom/milanesa.png' width='150' height='150'><br><a href='Combinaciones/Milanesa.php'>Milaneza empanizada</a></div>");
                } else { } if (($("#25").is(':checked') == true) && ($("#20").is(':checked') == true)) {
                   i++; 
                    Platillos.push("<div class='contenedor3'><img src='ImgCom/quesadilla.png' width='150' height='150'><br><a href='Combinaciones/Quesadilla.php'>Quesadilla</a></div>");
                } else { }  if (($("#18").is(':checked') == true) && ($("#25").is(':checked') == true)) {
                   i++; 
                    Platillos.push("<div class='contenedor3'><img src='ImgCom/' width='150' height='150'><br><a href='Combinaciones/.php'>Tacos de carne</a></div>");
                } else { } if (($("#330").is(':checked') == true) && ($("#8").is(':checked') == true)) {
                   i++; 
                   //Poner foto de tacos
                    Platillos.push("<div class='contenedor3'><img src='ImgCom/Lentejas.png' width='150' height='150'><br><a href='Combinaciones/Lentejas.php'>Lentejas</a></div>");
                } else { } if (($("#15").is(':checked') == true) && ($("#19").is(':checked') == true)) {
                   i++; 
                    Platillos.push("<div class='contenedor3'><img src='ImgCom/pescado.png' width='150' height='150'><br><a href='Combinaciones/Pesacado-empa.php'>Pescado empanizado</a></div>");
                } else { } if (($("#34").is(':checked') == true) && ($("#22").is(':checked') == true)) {
                   i++; 
                    Platillos.push("<div class='contenedor3'><img src='ImgCom/Macarrones.jpg' width='150' height='150'><br><a href='Combinaciones/Macarrones.php'>Macarron con queso</a></div>");
                } else { } if (($("#43").is(':checked') == true) && ($("#24").is(':checked') == true)) {
                   i++; 
                    Platillos.push("<div class='contenedor3'><img src='ImgCom/higado-ence.jpg' width='150' height='150'><br><a href='Combinaciones/Higado-Ence.php'>Higado encebollado</a></div>");
                } else { } if (($("#31").is(':checked') == true) && ($("#32").is(':checked') == true)) {
                   i++; 
                    Platillos.push("<div class='contenedor3'><img src='ImgCom/carne-molida.jpg' width='150' height='150'><br><a href='Combinaciones/Carne-molida.php'>Carne molida</a></div>");
                } else { } if (($("#41").is(':checked') == true) && ($("#46").is(':checked') == true)) {
                   i++; 
                    Platillos.push("<div class='contenedor3'><img src='ImgCom/' width='150' height='150'><br><a href='Combinaciones/Atun.php'>Atun preparado</a></div>");
                } else { } if (($("#47").is(':checked') == true) && ($("#3").is(':checked') == true)) {
                   i++; 
                   //Ponerle imagen atun
                    Platillos.push("<div class='contenedor3'><img src='ImgCom/ensalada-pollo.jpg' width='150' height='150'><br><a href='Combinaciones/Ensalada-Pollo.php'>Ensalada de pollo</a></div>");
                } else { } if (($("#19").is(':checked') == true) && ($("#3").is(':checked') == true)) {
                    i++; 
                    Platillos.push("<div class='contenedor3'><img src='ImgCom/pollo-frito.jpg' width='150' height='150'><br><a href='Combinaciones/Pollo-frito.php.php'>Pollo frito</a></div>");
                } else { } if (($("#25").is(':checked') == true) && ($("#13").is(':checked') == true) && ($("#1").is(':checked') == true)) {
                   i++; 
                    Platillos.push("<div class='contenedor3'><img src='ImgCom/chilaquiles-rojos.jpg' width='150' height='150'><br><a href='Combinaciones/Chilaquiles-Rojos.php'>Chilaquiles rojos</a></div>");
                } else { } if (($("#22").is(':checked') == true) && ($("#45").is(':checked') == true) && ($("#21").is(':checked') == true)) {
                   i++; 
                    Platillos.push("<div class='contenedor3'><img src='ImgCom/pure-papa.jpg' width='150' height='150'><br><a href='Combinaciones/Pure-de-papa.php'>Pure de papa</a></div>");
                } else { } if (($("#34").is(':checked') == true) && ($("#47").is(':checked') == true) && ($("#22").is(':checked') == true)) {
                   i++; 
                    Platillos.push("<div class='contenedor3'><img src='ImgCom/ensalada-coditos.jpg' width='150' height='150'><br><a href='Combinaciones/Ensalada-coditos.php'>Ensalada de coditos</a></div>");
                } else { } if (($("#1").is(':checked') == true) && ($("#12").is(':checked') == true) && ($("#27").is(':checked') == true)) {
                   i++; 
                    Platillos.push("<div class='contenedor3'><img src='ImgCom/ensalada-vegetales' width='150' height='150'><br><a href='Combinaciones/Ensalada.php'>Ensalada</a></div>");
                } else { } if (($("#38").is(':checked') == true) && ($("#39").is(':checked') == true) && ($("#40").is(':checked') == true)) {
                   i++; 
                    Platillos.push("<div class='contenedor3'><img src='ImgCom/ensalada-frutas.jpg' width='150' height='150'><br><a href='Combinaciones/Ensalada-frutas.php'>Ensalada de frutas</a></div>");
                } else { } if (($("#1").is(':checked') == true) && ($("#25").is(':checked') == true) && ($("#10").is(':checked') == true)) {
                   i++; 
                    Platillos.push("<div class='contenedor3'><img src='ImgCom/entomatadas.jpg' width='150' height='150'><br><a href='Combinaciones/Entomatadas.php'>Entomatadas</a></div>");
                } else { } if (($("#36").is(':checked') == true) && ($("#8").is(':checked') == true) && ($("#47").is(':checked') == true) && ($("#48").is(':checked') == true)) {
                  i++; 
                    Platillos.push("<div class='contenedor3'><img src='ImgCom/hotdog.jpg' width='150' height='150'><br><a href='Combinaciones/Hotdog.php'>Hot dog</a></div><br>");
                i++; } else { }

                //$('input[type=checkbox]:checked').each(function () {
                  //  Platillos.push($(this).val());
                //});
                var cadena = new String(Platillos);
                
                    if(i==0){
                        alert("No es posible combinar estos alimentos");
                        
                    }else{
                    
                            document.write('<head> <link href="estilos/estilo1.css" rel="stylesheet" type="text/css"/> </head>');
                          document.write('<body align="center" class="padre"><br><center><table>');
                          document.write(' <div>');
                            
                            document.write(cadena.replace(/,/g,"<br>"))
                            document.write(' </div>');
                             document.write("</table></center></body>");
                //window.location.href = "resultado.php"
                            // document.getElementById('resultado').innerHTML = Platillos;
                        }
                        
                
            });

        });