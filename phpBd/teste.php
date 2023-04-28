<?php
    include_once"conexao.php";
    $dados = [
        ["nome"=>"Pereira Thiago", "telefone"=>"(21) 12345-1246", "sexo"=>"M"],
        ["nome"=>"Romão Joyce", "telefone"=>"(31) 65645-8785", "sexo"=>"F"],
        ["nome"=>"Aragão Jorge", "telefone"=>"(24) 09724-1452", "sexo"=>"M"],
    ];
    function inserir($cliente){
    $pdo = conexao();
    $sql =  "INSERT INTO cadastrocliente(nome, telefone, sexo)".
            "VALUES (:nome, :telefone, :sexo)";
    $pdo->prepare($sql)->execute($cliente);
}
    foreach($dados as $pessoa){
        inserir($pessoa);
    }


















    /*
    include_once "conexao.php";
    $dados = [
        ["Jorge Mariano Dias", "(21) 12345-1234", "M"],
        ["Marcos Borges", "(21) 62453-5435", "M"],
        ["Thifany Pereira", "(21) 18766-3364", "F"]
    ];
    $pdo = conexao();
    $sql = "INSERT INTO cadastrocliente(nome, telefone, sexo)".
            "VALUES(?,?,?)";
    $stmt = $pdo->prepare($sql);
    foreach($dados as $linha){
        $stmt->execute($linha);
    }*/
?>