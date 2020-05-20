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
       body {
            background-image: url("../Background/sombrero.jpg");
        } 
       .contenedor1{
           background-color:white;
          
       }
       .fondo{
           background-color:transparent;
           border-radius:17px;
           border:solid;
           border-width:1px;
       }
       .div{background-color:red};
    </style>
</head>
<body class="padre">
<center>


    <div class="a"></div>
    
    <div class="contenedor1">

<nav class="navbar navbar-expand-lg navbar-light bg-light">

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="../index.php">Inicio <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link disabled" href="#" aria-disabled="true">Light</a>
      </li>
      <li class="nav-item">
      <a class="nav-link text-dark" href="./InicioCaseras.php" >Casera</a>
      </li>
      <li class="nav-item">
        <a class="nav-link text-dark" href="./InicioPostres.php" >Postres</a>
      </li>
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
  </div>
</div>
<div class="container fondo">
    <div class="row">
    <div class="col-sm">
    <div class="card" style="width: 18rem;">
  <img src="../ImgCom/bolitas-queso.jpg" class="card-img-top">
  <div class="card-body">
    <h5 class="card-title">Bolitas de Espinaca con Queso</h5>

    <a href="../Combinaciones/Bolitas-Queso.php " class="btn btn-primary">Ver receta</a>
  </div>    
    </div>
    </div>
    <div class="col-sm">
    <div class="card" style="width: 18rem;">
  <img src="../ImgCom/vegetales-horno.jpg" class="card-img-top">
  <div class="card-body">
    <h5 class="card-title">Vegetales al Horno</h5>

    <a href="../Combinaciones/Vegetales-Horno.php " class="btn btn-primary">Ver receta</a>
  </div>    
    </div>
    </div>
    <div class="col-sm">
      One of three columns
    </div>
  </div>
</div>
</center>
</body>
</html>