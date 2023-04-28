<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div>
        <h1>Resultado dia da semana</h1>
        <p>dia digitado: </p>
        <p><?php
            $par = $_GET["semana"];
            if($par == "segunda-feira"){
                echo "DD+CMS";
            }else if($par == "terça-feira"){
                echo "Banco de dados";
            }else if($par == "quarta-feira"){
                echo "ATÉ SEXTA-FEIRA";
            }else if($par == "quinta-feira"){
                echo "Projeto integrador";
            }else if($par == "sexta-feira"){
                echo "VAMOS VALIDAR OS FORMS COM JAVASCRIPT DAQUI HÁ DOIS DIAS";
            }else if($par == "sábado"){
                echo "Cerveja e churrasco";
            }else if($par == "domingo"){
                echo "Netflix";
            }else{
                echo "Dããh, era para digitar um dia da semana <br><a href=teste.php> return</a>";
            }
        ?>
    </div>
</body>
</html>