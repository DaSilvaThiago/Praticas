<?php
    try{
        include 'abrir_transacao.php';
        include_once 'operacoes.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ADO_2_PHP</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
</head>
<body>
<div class="container text-center">
<form method="POST" action="cadastrar.php" id="form1">
  <div class="mb-3">
    <label for="login" class="form-label">Login</label>
    <input type="text" class="form-control" id="Login" aria-describedby="Login" required>
  </div>
  <div class="mb-3">
    <label for="dt_nascimento" class="form-label">Data de Nascimento</label>
    <input type="date" class="form-control" id="dt_nascimento" value="2023-05-10" required>
  </div>
  <div class="mb-3">
    <label for="url_foto" class="form-label">URL da Foto</label>
    <input type="text" class="form-control" id="url_foto">
    </div>
    <div class="form-check">
  <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
  <label class="form-check-label" for="flexCheckDefault">
    Default checkbox
  </label>
</div>
<div class="form-check">
  <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" checked>
  <label class="form-check-label" for="flexCheckChecked">
    Checked checkbox
  </label>
</div>
  <div class="mb-3">
    <label for="sexo" class="form-label">Sexo</label>
    <input type="text" maxlength="1" placeholder="M/F" class="form-control" id="sexo" required>
  </div>
  <button type="submit" onclick="confirmar()" class="btn btn-primary">Salvar</button>
</form>
</div>

<!--JAVA SCRIPT DO BOOTSTRAP-->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>
</html>

<?php
    $transacao = true;
    } finally{
        include "fechar_transacao.php";
    }
?>