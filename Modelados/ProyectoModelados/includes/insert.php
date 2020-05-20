<?php

 $mysqli= new mysqli('localhost', 'root', '', 'web') or die(mysqli_error($mysqli));
        if(isset($_POST['guardar'])){
    $nom = $_POST['nom'];
    $useri = $_POST['us'];
    $pass = $_POST['pa'];

    $mysqli-> query("INSERT INTO usuario(nombre, username, password) VALUES('$nom', '$useri', '$pass')") or
            die($mysqli->error);
    header('Location: ../index.php');
        }
?>