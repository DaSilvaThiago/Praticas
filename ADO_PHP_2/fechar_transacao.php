<?php
    if($transacao)$pdo -> commit();
    else $pdo -> rollback();
    $pdo = null;
?>