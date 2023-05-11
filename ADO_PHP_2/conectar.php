<?php
    function conectar(){
        try{
            $db = "C:\\xampp\\htdocs\\Praticas\\ADO_PHP_2\\bd.sqlite";
            return new PDO("sqlite:$db");
        }catch(PDOExeception $e){
            echo "Erro: " . $e -> getMessage();
            throw $e;
        }
    }
?>