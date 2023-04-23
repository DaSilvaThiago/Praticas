<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1 style="text-align:center">Formulário</h1>
    <fieldset style="width:200px; margin:auto">
        <form action="resultadoForm.php" method="POST">
            <?php
                $cadastrados = [
                    "nome"=>$nome = $_POST["nome"],
                    "apelido"=>$apelido = $_POST["apelido"],
                    "foto"=> $foto = $_POST["foto"],
                    "data" =>$data = $_POST["data"],
                    "bio"=>$bio = $_POST["bio"],
                    "genero"=>$genero = $_POST["genero"]];
            ?>
            <p>
                <label for="nome">Nome: </label>
                <input type="text" name="nome" id="nome" maxlength="21" require>
            </p>
            <p>
                <label for="apelido">Apelido: </label>
                <input type="text" id="apelido" name="apelido" maxlength="21" require> 
            </p>
            <p>
                <label for="foto">Foto: </label>
                <input type="file" id="foto" name="foto" require>                
            </p>
            <p>
                <label for="dataNas">Data de Nascimento: </label>
                <input type="date" id="data" name="data" require>               
            </p>
            <p>
                <label for="bio"></label>
                <textarea name="bio" id="bio" cols="30" rows="10" require></textarea> 
            </p>
            <p>
                <label for="genero">Gênero: </label>
                M
                <input type="radio" name="genero" id="masculino" value="m">
                F
                <input type="radio" name="genero" id="feminino" value="f">
            </p>
            <p>
                <button type="submit">
                    Enviar
                </button>
            </p>
        </form>
    </fieldset>
</body>
</html>