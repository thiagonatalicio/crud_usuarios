<?php
    $bd = "usuarios";
    $host = "localhost:3306";
    $usuario = "root";
    $senha = "";

    $pdo = new PDO("mysql:host=" . $host . ";bdname=". $bd .";", $usuario, $senha);
    

?>