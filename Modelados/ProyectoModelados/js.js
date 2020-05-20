 $(document).ready(function () {

            // Comprobar los checkbox seleccionados
            $('#verPlatillos').on('click', function () {
                var i=parseInt("0");

                var Platillos = new Array();
                
                if (($("#9").is(':checked') == true) && ($("#37").is(':checked') == true) &&($("#7").is(':checked') == true)) {
                    Platillos.push("<tr><img src='ImgCom/' width='150' height='150'><a href='Combinaciones/Sandwich'.php''></a></tr><br>");
                    i++;
                } else {
                } if ($("#15").is(':checked') == true) {
                    Platillos.push("<tr><img src='ImgCom/' width='150' height='150'><a href='Combinaciones/Pescado.php''>Pescado a la pancha</a></tr><br>");
                 i++; 
                } else { } if ($("#17").is(':checked') == true) {
                    Platillos.push("<tr><img src='ImgCom/' width='150' height='150'><br><a href='Combinaciones/.php''>Salmon a la plancha</a></tr><br>");i++; 
                } else { }  if ($("#").is(':checked') == true) {
                   i++; 
                    Platillos.push("<tr><img src='ImgCom/' width='150' height='150'><a href='Combinaciones/Pollo1.php''>Pollo</a></tr><br>");
                } else { } if (($("#4").is(':checked') == true) && ($("#7").is(':checked') == true)) {
                   i++; 
                    Platillos.push("<tr><img src='ImgCom/' width='150' height='150'><a href='Combinaciones/Huevo-jamon.php''>Huevo con jamon</a></tr><br>");
                } else { } if (($("#4").is(':checked') == true) && ($("#8").is(':checked') == true)) {
                   i++; 
                    Platillos.push("<tr><img src='ImgCom/' width='150' height='150'><a href='Combinaciones/Huevo-salchcicha.php''>Huevo con salchicha</a></tr><br>");
                } else { } if (($("#11").is(':checked') == true) && ($("#30").is(':checked') == true)) {
                   i++; 
                    Platillos.push("<tr><img src='ImgCom/' width='150' height='150'><a href='Combinaciones/Espagueti.php''>Spaguetti con salsa de queso</a></tr><br>");
                } else { } if (($("#25").is(':checked') == true) && ($("#23").is(':checked') == true)) {
                   i++; 
                    Platillos.push("<tr><img src='ImgCom/' width='150' height='150'><a href='Combinaciones/Chilaquiles.php''>Chilaquiles verdes</a></tr><br>");
                } else { } if (($("#28").is(':checked') == true) && ($("#23").is(':checked') == true)) {
                   i++; 
                    Platillos.push("<tr><img src='ImgCom/' width='150' height='150'><a href='Combinaciones/Salsa-verde.php''>Salsa verde</a></tr><br>");
                } else { } if (($("#16").is(':checked') == true) && ($("#19").is(':checked') == true)) {
                   i++; 
                    Platillos.push("<tr><img src='ImgCom/' width='150' height='150'><a href='Combinaciones/Milanesa.php''>Milaneza empanizada</a></tr><br>");
                } else { } if (($("#25").is(':checked') == true) && ($("#20").is(':checked') == true)) {
                   i++; 
                    Platillos.push("<tr><img src='ImgCom/' width='150' height='150'><a href='Combinaciones/Quesadilla.php''>Quesadilla</a></tr><br>");
                } else { }  if (($("#18").is(':checked') == true) && ($("#25").is(':checked') == true)) {
                   i++; 
                    Platillos.push("<tr><img src='ImgCom/' width='150' height='150'><a href='Combinaciones/.php''>Tacos de carne</a></tr><br>");
                } else { } if (($("#33").is(':checked') == true) && ($("#8").is(':checked') == true)) {
                   i++; 
                    Platillos.push("<tr><img src='ImgCom/' width='150' height='150'><a href='Combinaciones/Lentejas.php''>Lentejas</a></tr><br>");
                } else { } if (($("#15").is(':checked') == true) && ($("#19").is(':checked') == true)) {
                   i++; 
                    Platillos.push("<tr><img src='ImgCom/' width='150' height='150'><a href='Combinaciones/Pesacado-empa.php''>Pescado empanizado</a></tr><br>");
                } else { } if (($("#34").is(':checked') == true) && ($("#22").is(':checked') == true)) {
                   i++; 
                    Platillos.push("<tr><img src='ImgCom/' width='150' height='150'><a href='Combinaciones/Macarrones.php''>Macarron con queso</a></tr><br>");
                } else { } if (($("#43").is(':checked') == true) && ($("#24").is(':checked') == true)) {
                   i++; 
                    Platillos.push("<tr><img src='ImgCom/' width='150' height='150'><a href='Combinaciones/Higado-Ence.php''>Higado encebollado</a></tr><br>");
                } else { } if (($("#31").is(':checked') == true) && ($("#32").is(':checked') == true)) {
                   i++; 
                    Platillos.push("<tr><img src='ImgCom/' width='150' height='150'><a href='Combinaciones/Carne-molida.php''>Carne molida</a></tr><br>");
                } else { } if (($("#41").is(':checked') == true) && ($("#46").is(':checked') == true)) {
                   i++; 
                    Platillos.push("<tr><img src='ImgCom/' width='150' height='150'><a href='Combinaciones/Atun.php''>Atun preparado</a></tr><br>");
                } else { } if (($("#47").is(':checked') == true) && ($("#3").is(':checked') == true)) {
                   i++; 
                    Platillos.push("<tr><img src='ImgCom/' width='150' height='150'><a href='Combinaciones/Ensalada-Pollo.php''>Ensalada de pollo</a></tr><br>");
                } else { } if (($("#19").is(':checked') == true) && ($("#3").is(':checked') == true)) {
                    i++; 
                    Platillos.push("<tr><img src='ImgCom/' width='150' height='150'><a href='Combinaciones/Pollo-frito.php''>Pollo frito</a></tr><br>");
                } else { } if (($("#25").is(':checked') == true) && ($("#13").is(':checked') == true) && ($("#1").is(':checked') == true)) {
                   i++; 
                    Platillos.push("<tr><img src='ImgCom/' width='150' height='150'><a href='Combinaciones/Chilaquiles-Rojos.php''>Chilaquiles rojos</a></tr><br>");
                } else { } if (($("#22").is(':checked') == true) && ($("#45").is(':checked') == true) && ($("#21").is(':checked') == true)) {
                   i++; 
                    Platillos.push("<tr><img src='ImgCom/' width='150' height='150'><a href='Combinaciones/Pure-de-papa.php''><Pure de papa/a></tr><br>");
                } else { } if (($("#34").is(':checked') == true) && ($("#47").is(':checked') == true) && ($("#22").is(':checked') == true)) {
                   i++; 
                    Platillos.push("<tr><img src='ImgCom/' width='150' height='150'><a href='Combinaciones/Ensalada-coditos.php''>Ensalada de coditos</a></tr><br>");
                } else { } if (($("#1").is(':checked') == true) && ($("#12").is(':checked') == true) && ($("#27").is(':checked') == true)) {
                   i++; 
                    Platillos.push("<tr><img src='ImgCom/' width='150' height='150'><a href='Combinaciones/Ensalada.php''>Ensalada</a></tr><br>");
                } else { } if (($("#38").is(':checked') == true) && ($("#39").is(':checked') == true) && ($("#40").is(':checked') == true)) {
                   i++; 
                    Platillos.push("<tr><img src='ImgCom/' width='150' height='150'><a href='Combinaciones/Ensalada-frutas.php''>Ensalada de frutas</a></tr><br>");
                } else { } if (($("#1").is(':checked') == true) && ($("#25").is(':checked') == true) && ($("#10").is(':checked') == true)) {
                   i++; 
                    Platillos.push("<tr><img src='ImgCom/' width='150' height='150'><a href='Combinaciones/Entomatadas.php''>Entomatadas</a></tr><br>");
                } else { } if (($("#36").is(':checked') == true) && ($("#8").is(':checked') == true) && ($("#47").is(':checked') == true) && ($("#48").is(':checked') == true)) {
                  i++; 
                    Platillos.push("<tr><img src='ImgCom/' width='150' height='150'><a href='Combinaciones/Hotdog.php''>Hot dog</a></tr><br>");
                i++; } else { }

                //$('input[type=checkbox]:checked').each(function () {
                  //  Platillos.push($(this).val());
                //});
                
                    if(i==0){
                        alert("No es posible combinar estos alimentos");
                        
                    }else{
                    
                            
                          document.write("<h1><h1/><center><table>");
                            document.write(Platillos + "hpñ");
                             document.write("</table></center>");
                //window.location.href = "resultado.php"
                            // document.getElementById('resultado').innerHTML = Platillos;
                        }
                        alert("hola");
                
            });

        });