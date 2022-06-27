<?php

    $hostname = "https://databases-auth.000webhost.com";
    $bancodedados = "cadastro";
    $usuario = "id19174394_root";
    $senha = "1py7Cg^QMknR[jHi";

    $conexao = new mysqli($hostname, $usuario, $senha, $bancodedados);

    if ($conexao->connect_errno) {
        echo "Falha ao conectar: (" . $conexao->connect_errno . ") " . $conexao->connect_error;
    }
    
?>
