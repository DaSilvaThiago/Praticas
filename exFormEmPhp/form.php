<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

<?php
function enviar(){
    $cadastrados = [
        "nome"=>$nome = $_POST["nome"],
        "apelido"=>$apelido = $_POST["apelido"],
        "foto"=> $foto = $_POST["foto"],
        "data" =>$data = $_POST["data"],
        "bio"=>$bio = $_POST["bio"],
        "genero"=>$genero = $_POST["genero"]];      

        if(isset($nome)){
            echo "digite seu nome!";
        }
        if(isset($apelido)){
            echo "digite seu apelido!";
        }
        if(isset($foto)){
            echo "escolha uma foto!";
        }
        if(isset($data)){
            echo "digit sua data de nascimento!";
        }
        if(isset($bio)){
            echo "escreve um texto breve!";
        }
        if(isset($genero)){
           echo "escolha um genêro!";
        }
    }
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
        <form action="" method="POST">
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
                <button type="submit" onclick="enviar()">
                    Enviar
                </button>
            </p>
        </form>
    </fieldset>
</body>
</html>