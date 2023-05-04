<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
    function lerArquivo() {
        $nome = "exemplo.txt";
        try {
            $arq = fopen($nome, "r");
            if (!$arq) {
                $msg = "Não achou o arquivo $nome";
                throw new Exception($msg);
            }
            return fread($arq, filesize($nome));
        } finally {
            if ($arq) {
                echo "fechando o arquivo";
                fclose($arq);
            } else {
                echo "entrou no finally";
            }
        }
    }
    

?>
</body>
</html>