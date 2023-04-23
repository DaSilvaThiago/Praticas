<?php
    /*function conexao(){
        try{
            $host = "localhost";
            $dbname = "cadastro";
            $user = "root";
            $senha = "";
            $port = 3306;
            return new PDO("mysql:host=$host:$port;dbname=$dbname", $user, $senha);
        }catch(PDOException $e){
            echo "ERRO: " . $e->getMessage();
            throw $e;
        }
    }*/
?>



<?php
    function conexao(){
        try{
            $host = "localhost";
            $dbname = "cadastro";
            $user = "root";
            $senha = "";
            $port = 3306;
            return new PDO("mysql:host=$host:$port;dbname=$dbname", $user, $senha);
        }catch(PDOException $e){
            echo "ERRO: ".$e->getMessage();
        }
    }
?>