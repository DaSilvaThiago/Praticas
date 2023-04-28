<?php
    include_once "conexao.php"; 
    $pdo = conexao();
    $transacaoOK = false;
    $pdo -> beginTransaction(); 
?>