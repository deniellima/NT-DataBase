<?php
    $dbHost = 'localhost';
    $dbUsername = 'root';
    $dbPassword = '';
    $dbName = 'prontuario';

    $conexao = new mysqli($dbHost,$dbUsername,$dbPassword,$dbName);

    if ($conexao -> connect_errno){
        echo "Erro no servidor";
    } 
    else {
        echo "Conexao efetuada";
    }

?>