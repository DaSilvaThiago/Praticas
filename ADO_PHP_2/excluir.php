<?php
    try {
        include "abrir_transacao.php";
        include_once "operacoes.php";

    $chave = (int) $_POST["chave"];
    $id = excluir($chave);

    header("Location: listar.php");

    $transacao = true;

    } finally {
        include "fechar_transacao.php";
    }
?>