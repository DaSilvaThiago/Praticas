<?php session_start();?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="insertdb.php" method="post">
        <?php
            if(isset($_SESSION['message']))echo $_SESSION['message'];
        ?>
        <div>
        <label for="nome">Nome</label>
        <input type="text" name="nome">
        </div>
        <div>
        <label for="email">email</label>
        <input type="text" name="email">
        </div>
        <div>
        <label for="idade">idade</label>
        <input type="text" name="idade">
        </div>
        <button name="enviar" type="submit">OK</button>
    </form>
</body>
</html>