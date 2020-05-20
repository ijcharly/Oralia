<!DOCTYPE html>
<html>
<head>
    <title>Cocinatelo</title>
    <meta charset="utf-8">
    <link rel="icon" href="Chef.jpg" type="image/jpg">
    <link href="estilos/estilos1.css" rel="stylesheet" type="text/css"/>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-1.12.2.min.js"
            integrity="sha256-lZFHibXzMHo3GGeehn1hudTAP3Sc0uKXBXAzHX1sjtk="
            crossorigin="anonymous"></script>
            <script src="js/js3.js">
                 
    </script>
    
    <script src="Scripts/bootstrap.min.js"></script>
    <style> 
    #resultado{background-color:red};
        .checkeable input {
            display: none;
        }

        .checkeable img {
            width: 100px;
            border: 5px solid transparent;
            border-radius: 30px;
        }

        .checkeable input {
            display: none;
        }

            .checkeable input:checked + img {
                border-color: rgb(86, 176, 250);
            }

       .container{
           background-color:white;
           position: relative;
           margin-left:10000px;
       }
       .div{background-color:red};
    </style>
</head>
<body class="padre">
<center>


    <div class="a"></div>
    <form action="includes/res.php" method="POST">
    
    <div class="contenedor1">

<nav class="navbar navbar-expand-lg navbar-light bg-light">

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item">
        <a class="nav-link disabled" href="#" aria-disabled="true">Inicio</a>
      </li>
      <li class="nav-item">
        <a class="nav-link text-dark" href="./Categorias/InicioLight.php" >Light</a>
      </li>
      <li class="nav-item">
        <a class="nav-link text-dark" href="./Categorias/InicioCaseras.php" >Casera</a>
      </li>
      <li class="nav-item">
        <a class="nav-link text-dark" href="#" tabindex="-1">Postres</a>
      </li>
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
  </div></nav>

        <h1>Bienvenido<a href="includes/logout.php" id="logout"> <?php echo $user->getNombre(); ?></a></h1>
        <h1>Seleccione los ingredientes con los que cuenta.</h1>

        <br />
        

        <table>
            <tr>
                <td>
                <div>                 
                    <label class="checkeable">

                        <input type="checkbox" id="1" name="" />
                        <img width="100" height="100" src="ImgAli/Tomate.jpg"/>
                    </label>
                    <br />
                    <h5 for="Tomate">Tomate</h5>
                </div></td>

                    <div><td>
                    <label class="checkeable">
                        <input type="checkbox" id="2" name="" />
                        <img width="100" height="100" src="ImgAli/Arroz.jpg" />
                    </label>
                    <br />
                    Arroz
                </div></td></td><td>
                <div>
                    <label class="checkeable">
                        <input type="checkbox" id="3" name="" />
                        <img width="100" height="100" src="ImgAli/Pollo.jpg" />
                    </label>
                    <br />
                    <h5>
                        Pollo
                        </td>
                </div>
            </tr><tr>
                <div>
                    <td><label class="checkeable">
                        <input type="checkbox" id="4" name="" />
                        <img width="100" height="100" src="ImgAli/Huevos.jpg" />
                    </label>
                    <br />
                    <h5>
                        Huevos
                        </td>
                </div>
                <div>
                    <td><label class="checkeable">
                        <input type="checkbox" id="5" name="" />
                        <img width="100" height="100" src="ImgAli/Frijoles.jpg" />
                    </label>
                    <br />
                    <h5>
                        Frijol
                        </td>
                </div>
                <div>
                    <td><label class="checkeable">
                        <input type="checkbox" id="6" name="" />
                        <img width="100" height="100" src="ImgAli/Maiz.jpg" />
                    </label>
                    <br />
                    <h5>
                        Maiz
                        </td>
                </div></tr>
                <div><tr>
                    <td><label class="checkeable">
                        <input type="checkbox" id="7" name="" />
                        <img width="100" height="100" src="ImgAli/Jamon.jpg" />
                    </label>
                    <br />
                    <h5>
                        Jamon
                        </td>
                </div>
                <div>
                    <td><label class="checkeable">
                        <input type="checkbox" id="8" name="" />
                        <img width="100" height="100" src="ImgAli/Salchichas.jpg"/>
                    </label>
                    <br />
                    <h5>
                        Salchcicha
                        </td>
                </div>
                <div>
                    <td><label class="checkeable">
                        <input type="checkbox" id="9" name="" />
                        <img width="100" height="100" src="ImgAli/Pan.jpg" />
                    </label>
                    <br />
                    <h5>
                        Pan de barra
                        </td>
                </div></tr><tr>
                <div>
                    <td><label class="checkeable">
                        <input type="checkbox" id="10" name="" />
                        <img width="100" height="100" src="ImgAli/Quesop.jpg" />
                    </label>
                    <br />
                    <h5>
                        Queso Panela
                        </td>
                </div>
                <div>
                    <td><label class="checkeable">
                        <input type="checkbox" id="11" name="" />
                        <img width="100" height="100" src="ImgAli/Spaguetti.jpg" />
                    </label>
                    <br />
                    <h5>
                        Spaguetti
                        </td>
                </div>
                <div>
                    <td><label class="checkeable">
                        <input type="checkbox" id="12" name="" />
                        <img width="100" height="100" src="ImgAli/Lechuga.jpg" />
                    </label>
                    <br />
                    <h5>
                        Lechuga
                        </td>
                </div></tr><tr>
                <div><td>
                    <label class="checkeable">
                        <input type="checkbox" id="13" name="" />
                        <img width="100" height="100" src="ImgAli/Chiler.jpg" />
                    </label>
                    <br />
                    <h5>
                        Chile rojo
                        </td>
                </div>
                <div>
                    <td><label class="checkeable">
                        <input type="checkbox" id="14" name="" />
                        <img width="100" height="100" src="ImgAli/Chorizo.jpg" />
                    </label>
                    <br />
                    <h5>
                        Chorizo
                        </td>
                </div>
                <div>
                    <td><label class="checkeable">
                        <input type="checkbox" id="15" name="" />
                        <img width="100" height="100" src="ImgAli/Pescado.jpg" />
                    </label>
                    <br />
                    <h5>
                        Pescado
                        </td>
                </div></tr> <tr>

            </div>
        
        <div class="col-sm">
            <div>
                <td><label class="checkeable">
                    <input type="checkbox" id="17" name="" />
                    <img width="100" height="100" src="ImgAli/Salmon.jpg" />
                </label>
                <br />
                <h5>Salmon</h5>
                </td>
            </div>

           
            <br />
            
            <div>
                <td><label class="checkeable">
                    <input type="checkbox" id="19" name="" />
                    <img width="100" height="100" src="ImgAli/Panm.jpg" />
                </label>
                <br />
                <h5>
                    Empanizado
                    </td>
            </div>
            <div>
                <td><label class="checkeable">
                    <input type="checkbox" id="20" name="" />
                    <img width="100" height="100" src="ImgAli/Quesoa.jpg" />
                </label>
                <br />
                <h5>Queso Asadero</h5>
                </td>
            </div></tr><tr>
            <div>
                <td><label class="checkeable">
                    <input type="checkbox" id="21" name="" />
                    <img width="100" height="100" src="ImgAli/Papa.jpg" />
                </label>
                <br />
                <h5>
                    Papa
                    </td>
            </div>
            <div>
                <td><label class="checkeable">
                    <input type="checkbox" id="22" name="" />
                    <img width="100" height="100" src="ImgAli/QuesoG.jpg" />
                </label>
                <br />
                <h5>Queso Amarillo</h5>
            </td>
            </div>
            
            <div>
                <td><label class="checkeable">
                    <input type="checkbox" id="24" name="" />
                    <img width="100" height="100" src="ImgAli/Cebolla.jpg" />
                </label>
                <br />
                <h5>
                    Cebolla
                    </td>
            </div></tr><tr>
            <div>
                <td><label class="checkeable">
                    <input type="checkbox" id="25" name="" />
                    <img width="100" height="100" src="ImgAli/Tortillas.jpg" />
                </label>
                <br />
                <h5>
                    Tortillas
                    </td>
            </div>
            <div>
                <td><label class="checkeable">
                    <input type="checkbox" id="26" name="" />
                    <img width="100" height="100" src="ImgAli/Aguacate.jpg" />
                </label>
                <br />
                <h5>
                    Agucate
                    </td>
            </div>
            <div>
                <td><label class="checkeable">
                    <input type="checkbox" id="27" name="" />
                    <img width="100" height="100" src="ImgAli/Limon.jpg" />
                </label>
                <br />
                <h5>
                    Limon
                    </td>
            </div></tr><tr>
           
            <div>
                <td><label class="checkeable">
                    <input type="checkbox" id="29" name="" />
                    <img width="100" height="100" src="ImgAli/QuesoC.jpg" />
                </label>
                <br />
                <h5>
                    Queso Crema
                    </td>
            </div>
            <div>
                <td><label class="checkeable">
                    <input type="checkbox" id="30" name="" />
                    <img width="100" height="100" src="ImgAli/Harina.jpg" />
                </label>
                <br />
                <h5>
                     Harina
                    </td>
            </div>
            <div>
                <td><label class="checkeable">
                    <input type="checkbox" id="31" name="" />
                    <img width="100" height="100" src="ImgAli/CarneMolida.jpg" />
                </label>
                <br />
                <h5>
                    Carne molida
                    </td>
            </div></tr><tr>
            <div>
                <td><label class="checkeable">
                    <input type="checkbox" id="32" name="" />
                    <img width="100" height="100" src="ImgAli/Zanahoria.jpg" />
                </label>
                <br />
                <h5>
                    Zanahoria
                    </td>
            </div>
        </div>
        <div class="col-sm">
            <div>
                <td><label class="checkeable">
                    <input type="checkbox" id="33" name="" />
                    <img width="100" height="100" src="ImgAli/Lentejas.jpg" />
                </label>
                <br />
                <h5>
                    Lentejas
                    </td>
            </div>
            <div>
                <td><label class="checkeable">
                    <input type="checkbox" id="34" name="" />
                    <img width="100" height="100" src="ImgAli/SopaCodos.jpg" />
                </label>
                <br />
                <h5>
                    Sopa de Coditos
                    </td>
            </div></tr><tr>
            <div>
                <td><label class="checkeable">
                    <input type="checkbox" id="36" name="" />
                    <img width="100" height="100" src="ImgAli/Panhotdog.jpg" />
                </label>
                <br />
                <h5>
                    Pan de hotdog
                    </td>
            </div>
            <div>
                <td><label class="checkeable">
                    <input type="checkbox" id="37" name="" />
                    <img width="100" height="100" src="ImgAli/SalchichaAsar.png" />
                </label>
                <br />
                <h5>
                    Salchicha para asar
                    </label>
            </div>
            <div>
                <td><label class="checkeable">
                    <input type="checkbox" id="38" name="" />
                    <img width="100" height="100" src="ImgAli/Fresas.jpg" />
                </label>
                <br />
                <h5>
                    Fresas
                    </label></td>
            </div></tr><tr>
            <div>
                <td><label class="checkeable">
                    <input type="checkbox" id="39" name="" />
                    <img width="100" height="100" src="ImgAli/Platanos.jpg" />
                </label>
                <br />
                <h5>
                    Platano
                    </label></td>
            </div>
            <div>
                <td><label class="checkeable">
                    <input type="checkbox" id="40" name="" />
                    <img width="100" height="100" src="ImgAli/Manzanas.jpg" />
                </label>
                <br />
                <h5>
                    Manzana
                    </label></td>
            </div>
            <div>
               <td> <label class="checkeable">
                    <input type="checkbox" id="41" name="" />
                    <img width="100" height="100" src="ImgAli/BolsaVerduras.jpg" />
                </label>
                <br />
                <h5>
                    Bolsa de verduras
                    </label></td>
            </div></tr><tr> <div>
                <td><label class="checkeable">
                    <input type="checkbox" id="42" name="" />
                    <img width="100" height="100" src="ImgAli/MilanesaRes.jpg" />
                </label>
                <br />
                <h5>
                    Milanesa de Res
                    </label></td>
            </div>
            <td><div>
                <label class="checkeable">
                    <input type="checkbox" id="43" />
                    <img width="100" height="100" src="ImgAli/Higado1.jpg" />
                </label>
                <br />
                <h5>
                    Higado
                    </label></td>
            </div>
            <div>
                <td><label class="checkeable">
                    <input type="checkbox" id="44" name="" />
                    <img width="100" height="100" src="ImgAli/Mango.jpg" />
                </label>
                <br />
                <h5>
                    Mango
                    </label></td>
            </div></tr><tr>
            <div>
                <td><label class="checkeable">
                    <input type="checkbox" id="45" name="" />
                    <img width="100" height="100" src="ImgAli/Mantequilla.jpg" />
                </label>
                <br />
                <h5>
                    Mantequilla
                    </label></td>
            </div>
            <div>
                <td><label class="checkeable">
                    <input type="checkbox" id="46" name="" />
                    <img width="100" height="100" src="ImgAli/Atun.jpg" />
                </label>
                <br />
                <h5>
                    Atun en lata
                    </label></td>
            </div>
            <div>
                <td><label class="checkeable">
                    <input type="checkbox" id="47" name="" />
                    <img width="100" height="100" src="ImgAli/Mayonesa.jpg" />
                </label>
                <br />
                <h5>
                    Mayonesa
                </label></td>
            </div></tr><tr><td>
            <div>
                <label class="checkeable">
                    <input type="checkbox" id="48" name="" />
                    <img width="100" height="100" src="ImgAli/Mostaza.jpg" />
                </label>
                <br />
                <h5>
                    Mostaza
            </div><td></tr>
        </table>
            <input type="button" id="verPlatillos" class="largo" value="Ver platillos">
        
        <div id="resultado"></div>
        
</div>
<h1><a href="includes/logout.php" id="logout1">Cerrar Sesion</a></h1>
    </form>
        </center>
</body>
</html>