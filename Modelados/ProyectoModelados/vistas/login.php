<!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="utf-8" />

    <title>Login</title>
    <link rel="icon" href="http://localhost:50910/media/icono.png" type="image/png">
  
    <link href="estilos/estilos1.css" rel="stylesheet" type="text/css"/>
</head>
<body align="center" class="padre">
    <div class="contenedor">
        <div class="text-center">
            <br />
            <div class="card text-center">
                <div class="card-boy">
                    <h2>Inicio de sesion</h2>
                    <img src="./Background/Chef.jpg" width="100" height="100" />
                    <h4>Cocinate</h4>
                    
                    <center>
                        <form action="" method="POST">
                            <label class="error"> <?php
            if(isset($errorLogin)){
                echo $errorLogin;
            }
            ?></label><br><br>
            <label>Nombre de usuario:</label><br>
            <input type="text" placeholder="usuario" name="username"><br>
                            <label>Contraseña:</label><br>
                                    <input type="password" placeholder="clave" name="password">
                                    <input type="submit" value="iniciar sesion" id="iniciar">
                                    <br>
                                    <a href="registro.php" style="color:blue">Registrate</a>
                        </form>
                        
                        <br /><br />
                    </center>
                    <br />

                </div> 
            </div><br /><br /><br /><br />


        </div>
    </div>
    
</body>
</html>
