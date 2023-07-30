<?php 

    $hostname = "localhost"; // endereço do banco de daddos ex: no pago mysql.hostinger.com
    $bancodedados = "link_grupo";
    $usuario = "root";
    $senha = "";

    $mysqli = new mysqli($hostname,  $usuario, $senha,  $bancodedados);

    if($mysqli->errno) {
        if ($mysqli->connect_errno){
            echo "Falha ao conectar com o BANCO DE DADOS: (" . $mysqli->connect_errno . ") " . $mysqli->connect_errno;
        } else {
            echo "Conectado com sucesso!!!";
        };
    }


?>