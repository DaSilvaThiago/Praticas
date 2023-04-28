<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    // para mostrar imagem usar tag img normal e entre aspa simples a variavel.
    
    if(isset($_POST["submit"]) && isset($_POST["nome"]) && isset($_POST["apelido"]) && isset($_POST["foto"]) && isset($_POST["data"]) && isset($_POST["bio"]) && isset($_POST["genero"])){
        $cadastrados = [
            "nome"=>$nome = $_POST["nome"],
            "apelido"=>$apelido = $_POST["apelido"],
            "foto"=> $foto = $_POST["foto"],
            "data" =>$data = $_POST["data"],
            "bio"=>$bio = $_POST["bio"],
            "genero"=>$genero = $_POST["genero"]
        ];
    }else{
        header("Location: form.php");
        $_POST["erro"] = "Preencha todos os campos!"; 
    }


        
        
    ?>

</body>
</html>