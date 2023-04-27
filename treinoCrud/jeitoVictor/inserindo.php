<?php

    try{
        include_once "conexao.php";
        include_once "iniciaConexao.php";

        function inserir($cliente){
            global $pdo;
            $sql = "INSERT INTO cliente(nome, telefone, sexo)". "VALUES (:nome, :telefone, :sexo)";
            $pdo -> prepare($sql) -> execute($cliente);
        }

        $cliente = [
            "nome" => "Thiago Dias Da Silva",
            "telefone" => "(11) 99476-6205",
            "sexo" => "M"
        ];

        inserir($cliente);
        $transacaoOK = true;

    }finally{
        include "finalizaConexao.php";
    }

?>