<?php 
    $host = "localhost";
    $db = "carros";
    $user = "root";
    $pass = "";

    $mysqli = new mysqli($host, $user, $pass, $db);
    if ($mysqli->connect_errno) {
        die("Falha na conexão com o Banco de Dados!");
    }
?>