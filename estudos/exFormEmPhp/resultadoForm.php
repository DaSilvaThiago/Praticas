<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        #erroPgDois{
            text-align: center;
            font-weight: bolder;
            background-color: yellow;
        }
    </style>
</head>
<body>
<?php

    $cadastrados = [
        "nome"=>$nome = $_POST["nome"],
        "apelido"=>$apelido = $_POST["apelido"],
        "foto"=> $foto = $_POST["foto"],
        "data" =>$data = $_POST["data"],
        "bio"=>$bio = $_POST["bio"],
        "genero"=>$genero = $_POST["genero"]];      
        echo $nome."<br>".$apelido."<br>".$foto."<br>".$data."<br>".$bio."<br>".$genero;

        if(empty($genero))echo "<br><p id='erroPgDois'>Prencha o campo GÊNERO <a href='form.php'>Voltar</a></p>";
        


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


</body>
</html>