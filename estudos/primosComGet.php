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
        <h1>Numeros Primos com <SPAN style="color:green"> $_GET</SPAN></h1>
        <form method="$_GET">
            <label for="n1">Primeiro Numero(COMEÇO): </label>
            <input type="number" name="a">
            <br>
            <label for="n2">Segundo Numero(FIM): </label>
            <input type="number" name="b">
            <br>
            <button>OK</button>
        </form>
        <p>numeros primos entre <?php echo $_GET["a"];?> e <?php echo $_GET["b"];?></p>
        <?php
            function primo($n1, $n2){
                while ($n1<=$n2){
                    $contPrimo= 0;
                    for($i=1;$i<=$n2;$i++){
                      if($n1%$i==0){
                        $contPrimo++;
                    }
                    }       
                    if ($contPrimo==2){
                        echo $n1 . "<br>";
                    }
                    $n1++;            
                }
            }
            echo primo(($_GET["a"]), ($_GET["b"]));
        ?>
    </div>
</body>
</html>