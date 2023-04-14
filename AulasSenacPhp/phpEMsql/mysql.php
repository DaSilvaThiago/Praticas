<?php
    function conectar(){

        //conexão MYSQL
        try{
            $host = "localhost";
            $dbname = "cadastro";
            $user = "root";
            $senha = "";
            $port = 3307;
            return new PDO("mysql:host=$host:$port;dbname=$dbname", $user, $senha);
        }catch (PDOException $e){
            echo "EROO : " . $e-> getMessage();
            throw $e;
        }
        
        
        //conexão SQLITE
        /*try{
            $db_file = "C:\\xampp\\htdoc\\sistema.sqlite";
            $pdo = new PDO("sqlite:$db_file");
        }catch (PDOException $e){
            echo "Erro: " . $e -> getMessage();
        }*/
    }
?>