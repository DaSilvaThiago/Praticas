<?php
    try{
      include 'abrir_transacao.php';
      include_once 'operacoes.php';
      
      function dataValida($data) {
        try {
            $d = new DateTimeImmutable($data);
            if ($data !== $d->format("Y-m-d")) return false;
            if ((int) $d->format("Y") <= 0) return false;
        } catch (Exception $x) {
            return false;
        }
        return true;
      }
      function verificarData($data) {
        global $hoje;
        if (!dataValida($data)) return "Digite uma data válida.";
        if (new DateTimeImmutable($data) > $hoje) return "Digite a sua data de nascimento corretamente.";
        return "";
      }
      
      function validacao($pessoa){
        $foto = $pessoa["url_foto"];
        if(isset($foto))return strlen($foto) >=10 && strlen($foto) >=1000;
      }


      if ($_SERVER["REQUEST_METHOD"] == "GET"){
        $alterar = isset($_GET["chave"]);
        if($alterar){
          $chave = $_GET["chave"];
          $pessoa = buscar_pessoa($chave);
          if($pessoa == null) die("Não existe!");
        }else{
          $chave = "";
          $pessoa = [
            "chave" => "",
            "login" => "",
            "dt_nascimento" => "",
            "url_foto" => "",
            "interesse_homens" => "",
            "interesse_mulheres" => "",
            "sexo" => ""
          ];
        }
        $validacao = true;
      }else if($_SERVER["REQUEST_METHOD"] == "POST"){
        $alterar = isset($_POST["chave"]);
        if($alterar){
          $pessoa = [
            "chave" => $_POST["chave"],
            "login" => $_POST["login"],
            "dt_nascimento" => $_POST["dt_nascimento"],
            "url_foto" => $_POST["url_foto"],
            "interesse_homens" => $_POST["interesse_homens"],
            "interesse_mulheres" => $_POST["interesse_mulheres"],
            "sexo" => $_POST["sexo"]
          ];
          $dtValido = false;
          $data = $pessoa["dt_nascimento"];
          $validacao = validacao($pessoa);
          $erro = verificarData($data);
          if ($erro === "") $dtValido = true;
          if($validacao && $dtValido) alterar($pessoa);
        }else{
          $pessoa = [
            "login" => $_POST["login"],
            "dt_nascimento" => $_POST["dt_nascimento"],
            "url_foto" => $_POST["url_foto"],
            "interesse_homens" => $_POST["interesse_homens"],
            "interesse_mulheres" => $_POST["interesse_mulheres"],
            "sexo" => $_POST["sexo"]
          ];
          $dtValido = false;
          $data = $pessoa["dt_nascimento"];
          $validacao = validacao($pessoa);
          $erro = verificarData($data);
          if ($erro === "") $dtValido = true;
          if($validacao && $dtValido) $id = inserir($pessoa);
        }
        if($validacao){
          header("location: listar.php");
          $transacao = true;
        }
      }else{
        die("Método não aceito");
      }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ADO_2_PHP</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <script>
      function confirmar(){
        if(!confirm("Tem certeza que deseja salvar os dados?")) return;
        document.getElementById("form1").submit();
      }
      function excluir(){
        if(!confirm("Tem certeza que deseja excluir a pessoa?")) return;
        document.getElementById("dropForm").submit();
      }
    </script>
</head>
<body>
<div class="container text-center mt-5">
<form method="POST" action="cadastrar.php" id="form1">
  <?php
    if(!$validacao){?>
    <div>
      <p>Preencha os campos corretamente!</p>
    </div>
    <?php }?>
    <?php
      if($alterar){?>
        <div class="mb-3">
          <label for="chave" class="form-label">Chave</label>
          <input type="text" class="form-control" id="chave" aria-describedby="Login" value="<?= $pessoa["chave"]?>" readonly>
        </div>
  <?php }?>
  <div class="mb-3">
    <label for="login" class="form-label">Login</label>
    <input type="text" value="<?= $pessoa["login"]?>" class="form-control" id="Login" aria-describedby="Login" name="login" required>
  </div>
  <div class="mb-3">
    <label for="dt_nascimento" class="form-label">Data de Nascimento</label>
    <input type="date" class="form-control" value="<?= $pessoa["dt_nascimento"]?>" id="dt_nascimento" name="dt_nascimento" required>
  </div>
  <div class="mb-3">
    <label for="url_foto" class="form-label">URL da Foto</label>
    <input type="text" class="form-control" id="url_foto" name="url_foto" value="<?= $pessoa["url_foto"]?>">
  </div>
  <div class="row">
    <div class="col">
      <div class="form-check">
        <legend>Interesse em Homems</legend>
        <input value="<?= $pessoa["interesse_homens"]?>" class="form-check-input" value="1" type="radio" name="interesse_homens" id="intH" required>
        <label class="form-check-label" for="intH">Sim</label>
      </div>
      <div class="form-check">
        <input class="form-check-input" type="radio" value="<?= $pessoa["interesse_homens"]?>" name="interesse_homens" id="intH2" value="0">
        <label class="form-check-label" for="intH2">Não</label>
      </div>
    </div>
    <div class="col">
      <div class="form-check">
        <legend>Interesse em Mulheres</legend>
        <input class="form-check-input" value="1" type="radio" name="interesse_mulheres" value="<?= $pessoa["interesse_mulheres"]?>"  id="intM" required>
        <label class="form-check-label" for="intM">Sim</label>
      </div>
      <div class="form-check">
        <input class="form-check-input" type="radio" name="interesse_mulheres" value="<?= $pessoa["interesse_mulheres"]?>" id="intM2" value="0">
        <label class="form-check-label" for="intM2">Não</label>
      </div>
    </div>
    <div class="col">
      <div class="form-check">
        <legend>Sexo</legend>
        <input class="form-check-input" value="<?= $pessoa["sexo"]?>" value="F" type="radio" name="sexo" id="feminino" required>
        <label class="form-check-label" for="intH">Feminino</label>
      </div>
      <div class="form-check">
        <input class="form-check-input" type="radio" name="sexo" value="<?= $pessoa["sexo"]?>" id="masculino" value="M">
        <label class="form-check-label" for="sexo">Masculino</label>
      </div>
    </div>
  </div>
  <button type="submit" onclick="confirmar()" class="btn btn-primary mt-5">Salvar</button>
</form>
</div>
<?php
  if($alterar){?>
  <form action="excluir.php" method="POST" style="display: none;" id="dropForm">
    <input type="hidden" name="chave" value="<?= $pessoa["chave"]?>">
  </form>
  <button type="button" onclick="excluir()">Excluir</button>
  <?php }?>
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