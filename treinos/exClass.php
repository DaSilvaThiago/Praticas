<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    
</head>
<body>
    <h1>Saldo Cliente</h1>
    <p>escreva seu saldo e valor pago</p>
    <div>
        <form action="" method="GET">
        <label for="nome">Nome: <input type="text" id="nome" name="nome"></label>
        <label for="saldo">Saldo: <input type="number" id="saldo" name="saldo"></label>
        <label for="valor">Valor: <input type="number" name="valor" id="valor"></label>
        <button type="submit">OK</button>
        </form>
        <?php
        $nome = $_GET["nome"];
        $saldo = $_GET["saldo"];
        $valor = $_GET["valor"];

            class cliente{

                private $nome;
                private $saldo;
                private $valor;

                public function __construct($nome, $saldo, $valor){
                    $this->nome = $nome;
                    $this->saldo = $saldo;
                    $this->valor = $valor;
                }

                public function res(){
                    return "Nome do cliente: ".$this->nome."<br>Saldo em conta: ".$this->saldo."<br> Valor pago: ".$this->valor;
                }
            }
            
            $recebimentoCliente = new cliente($nome, $saldo, $valor);

            echo $recebimentoCliente->res();
            //echo "<br> Valor pago: ".$recebim
        ?>
    </div>
</body>
</html>
