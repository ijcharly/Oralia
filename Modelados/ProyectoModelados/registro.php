<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->

    <head>
        <meta charset="UTF-8">
        <link rel="icon" href="http://localhost:50910/media/icono.png" type="image/png">
        <link rel="stylesheet" href="estilos/estilos1.css">
        <title>SIIA</title>
    </head>
    <body class="padre">
        <div class="contenedor2">
        
        <form method="POST" action="includes/insert.php">
            
                <h1>Registro de nuevos usuarios</h1>
                <br><br>
                <label>Nombre completo:</label><br>
                <input type="text" name="nom"label="Nombre"id="inp"><br>
                <br>
                <label>Nombre de usuario:</label><br>
                <input type="text" value="" name="us"label="Username"id="inp"><br>
                <br>
                <label>Contraseña:</label><br>
                <input type="text" value="" name="pa" label="Password"id="inp"><br>
                <br>
              
                <button type="submit" name="guardar" id="iniciar">Guardar</button>
                <br>
                <a href="index.php" class="cancelar" style="color:blue">Cancelar</a>
            
        </form>
        </div>
    </body>
</html>
