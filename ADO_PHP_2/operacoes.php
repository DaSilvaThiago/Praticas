<?php
    include_once 'conectar.php';
    date_default_timezone_set("America/Sao_Paulo");
    $hoje = (new DateTimeImmutable("now"))->setTime(0, 0, 0, 0);


    function inserir($pessoa){
        global $pdo;
        $sql = "INSERT INTO pessoa
        (login, dt_nascimento, url_foto, interesse_homens, interesse_mulheres, sexo)".
        "VALUES
        (:login, :dt_nascimento, :url_foto, :interesse_homens, :interesse_mulheres, :sexo)";
        $pdo->prepare($sql)->execute($pessoa);
        return $pdo->lastInsertId();
    }

    function buscar_pessoa($chave){
        global $pdo;
        $sql = "SELECT *
                FROM pessoa
                WHERE chave = :chave";
        $resultados = [];
        $consulta = $pdo->prepare($sql);
        $consulta->execute(["chave"=>$chave]);
        return $consulta->fetch();
    }

    function listar(){
        global $pdo;
        $sql = "SELECT * 
                FROM pessoa";
        $resultados = [];
        $consulta = $pdo->query($sql);
        while ($linha = $consulta->fetch()){
            $resultados[] = $linha;
        }
    }

    function alterar($pessoa){
        global $pdo;
        $sql = "UPDATE pessoa SET".
                "login = :login,".
                "dt_nascimento = :dt_nascimento,".
                "url_foto = :url_foto,".
                "interesse_homens = :interesse_homens,".
                "interesse_mulheres = :interesse_mulheres,".
                "sexo = :sexo,".
                "WHERE chave = :chave";
        $pdo->prepare($sql)->execute($pessoa);
    }

    function excluir($chave){
        global $pdo;
        $sql = "DELETE
                FROM pessoa
                WHERE chave = :chave";
        $pdo->prepare($sql)->execute(["chave" => $chave]);
    }
?>