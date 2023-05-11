<?php
    define('mysql_host', '127.0.0.1:3307');
    define('mysql_user', 'root');
    define('mysql_password','');
    define('mysql_db_name','cadastro');

  try{
    $pdo = new pdo('mysql:host='.mysql_host.';dbname='.mysql_db_name, mysql_user, mysql_password);
    $sql = "select * from flor";
    $result = $pdo -> query($sql);
    $rows = $result->fetchAll();

    print_r($rows);   

}catch(PDOException $e){
    echo 'Erro na conexão com SQL'. $e->getMessage();
  }
?>