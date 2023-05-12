<?php
    try{
        include"abrir_transacao.php";
        include_once"operacoes.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listagem</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
</head>
<body>
    <?php $resultado = listar();?>
    <div class="container text-center mt-5">
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">Chave</th>
                    <th scope="col">Login</th>
                    <th scope="col">Data de nascimento</th>
                    <th scope="col">Foto</th>
                    <th scope="col">Interesse em homems</th>
                    <th scope="col">Interesse em mulheres</th>
                    <th scope="col">Sexo</th>
                    <th scope="col"></th>
                </tr>
            </thead>
            <?php foreach ($resultados as $linha){?>
            <tbody>
                <tr>
                    <td><?= $linha["chave"]?></td>
                    <td><?= $linha["dt_nascimento"]?></td>
                    <td><?= $linha["url_foto"]?></td>
                    <td><?= $linha["interesse_homens"]?></td>
                    <td><?= $linha["interesse_mulheres"]?></td>
                    <td><?= $linha["sexo"]?></td>
                    <td><button type="button" class="btn btn-primary"><a href="cadastrar.php?chave=<?=$linha["chave"]?>">Editar</a></button></td>
                </tr>
            </tbody>
            <?php }?>
        </table>
        <button type="button" class="btn btn-success"><a href="cadastrar.php">Criar Novo</a></button>
    </div>
<!--JAVA SCRIPT DO BOOTSTRAP-->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>
</html>
<?php 
    $transacao = true;
        }finally{
            include "fechar_transacao.php";
        }
?>