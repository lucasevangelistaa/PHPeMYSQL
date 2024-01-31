<?php 
    $localhost = "localhost";
    $bd = "login";
    $user = "root";
    $pass = "";

    $mysqli = new mysqli($localhost, $user, $pass, $bd);
    if ($mysqli->connect_errno) {
        die("Falha na conexão com o Banco de Dados!");
    }
?>