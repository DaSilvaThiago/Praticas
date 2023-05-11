<?php
    include_once 'conectar.php';

    function inserir(){
        global $pdo;
        $sql = "INSERT INTO pessoa
        (login, dt_nascimento, url_foto, interesse_homens, interesse_mulheres, sexo)".
        "VALUES
        (:login, :dt_nascimento, :url_foto, :interesse_homens, :interesse_mulheres, :sexo)";
        $pdo -> prepare($sql) -> execute();
        return $pdo -> lastInsertId();
    }

    //function validar(){
    //    return strlen
    //}
?>