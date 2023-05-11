<?php
    include_once 'conectar.php';
    date_default_timezone_set("America/Sao_Paulo");
    $hoje = (new DateTimeImmutable("now"))->setTime(0, 0, 0, 0);


    function inserir(){
        global $pdo;
        $sql = "INSERT INTO pessoa
        (login, dt_nascimento, url_foto, interesse_homens, interesse_mulheres, sexo)".
        "VALUES
        (:login, :dt_nascimento, :url_foto, :interesse_homens, :interesse_mulheres, :sexo)";
        $pdo -> prepare($sql) -> execute();
        return $pdo -> lastInsertId();
    }

    function buscar_pessoa($chave){
        global $pdo;
        $sql = "SELECT *
                FROM pessoa
                WHERE chave = :chave";
        $resultados = [];
        $consulta = $pdo -> prepare($sql);
        $consulta -> execute(["chave" => $chave]);
        return $consulta -> fetch();
    }

    function dataValida($data){
        try{
            $d = new DateTimeImmutable($data);
            if($data !== $d -> format("Y-m-d")) return "erro";
            if((int) $d -> format("Y") <= 0) return "erro";
        }catch(Exception $x){
            return "erro";
        }
        return "";
    }

    function idade($data){
        global $hoje;
        if(!dataValida($data)) return "erro";
        $data_de = new DateTimeImmutable($data);
        $intervalo = $hoje -> diff($data_de);
        return $intervalo -> y;
    }

    function verificarData($data){
        global $hoje;
        if(!dataValida($data)) return "erro";
        if(new DateTimeImmutable($data) > $hoje) return "erro";
        if(idade($data) > 120) return "erro";
        if(idade($data) < 18) return "erro";
        return "";
    }

    function validar($pessoa){
        $data = $pessoa["dt_nascimento"];
        $validar = verificarData($data);
        if($validar === "" && strlen($pessoa["url_foto"]) >= 10 && strlen($pessoa["url_foto"]) <= 1000){
            return true;
        }
        return false;

    }

    function alterar($pessoa){
        
    }
?>