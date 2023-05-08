<?php

    $dbName = "crudtreino";
    $userName = "root";
    $password = "";
    $hostName = "localhost";

    try{

        $conexao = new PDO("mysql:host=$hostName;dbname=$dbName", $userName, $password);
        $conexao->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    }catch(Exception $e){
        echo "ERRO PORRA". $e -> getMessage();
    }

?>