<?php
    try{
        define("HOSTNAME", "localhost");
        define("USERNAME", "root");
        define("PASSWORD", "");
        define("DATABASE", "crudtreino");
        $conection = mysqli_connect(HOSTNAME,USERNAME,PASSWORD,DATABASE);
        if(!$conection){
            new Exception();
        }
    }catch(\Exception $e){
        echo $e->getMessage();
    }
?>
