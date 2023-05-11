<?php
    include_once 'conectar.php';
    $pdo = conectar();
    $transacao = false;
    $pdo -> beginTransaction();
?>