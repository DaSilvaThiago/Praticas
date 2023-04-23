<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

<?php

     /*   class cadastro{
           private $nome;
           private $apelido;
           private $foto;
           private $data;
           private $bio;
           private $genero;
   
           public function __construct($nome, $apelido, $foto, $data, $bio, $genero){
               $this -> nome = $nome;
               $this -> apelido = $apelido;
               $this -> foto = $foto;
               $this -> data = $data;
               $this -> bio = $bio;
               $this -> genero = $genero;
           }
   
           public function escrever(){
               return $this->nome;
           }
       }
   */
?>

</head>
<body>
    <h1 style="text-align:center">Formulário</h1>
    <fieldset style="width:200px; margin:auto">
        <form action="resultadoForm.php" method="POST">
            <p id="erro" name="erro"></p>
            <p>
                <label for="nome">Nome: </label>
                <input type="text" name="nome" id="nome">
            </p>
            <p>
                <label for="apelido">Apelido: </label>
                <input type="text" id="apelido" name="apelido"> 
            </p>
            <p>
                <label for="foto">Foto: </label>
                <input type="file" id="foto" name="foto">                
            </p>
            <p>
                <label for="dataNas">Data de Nascimento: </label>
                <input type="date" id="data" name="data">               
            </p>
            <p>
                <label for="bio"></label>
                <textarea name="bio" id="bio" cols="30" rows="10"></textarea> 
            </p>
            <p>
                <label for="genero">Gênero: </label>
                M
                <input type="radio" name="genero" id="masculino" value="m">
                F
                <input type="radio" name="genero" id="feminino" value="f">
            </p>
            <p>
                <button type="submit" name="submit" onclick="enviar()">
                    Enviar
                </button>
            </p>
        </form>
    </fieldset>
</body>
</html>