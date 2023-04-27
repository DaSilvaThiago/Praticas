<?php
    function conexao(){
        try{
            $host = "localhost";
            $dbname = "crudtreino";
            $user = "root";
            $senha = "";
            $port = 3306;
            return new PDO("mysql:host=$host:$port; dbname=$dbname", $user, $senha);
        }catch(PDOException $e){
                echo "Error in SQL atemption" . $e -> getMessage();
                throw $e;
        }
    }    
?>