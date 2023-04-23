<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ex facul</title>
    <style>
        body{
            background-color: lightblue;
            text-align: center;
        }
        label{
            margin: 5px;
        }
        input{
            margin-bottom: 5px;
        }
        button{
            margin: auto;
        }
        fieldset{
            margin: auto;            
           background-color:lightgrey ;
            width: 200px
        }
    </style>
</head>
<body>
    <h1>EXs aula 4</h1>
    <p>preencha os campos para saber que tipo de triangulo você está se referindo: </p>
    <div>
        <fieldset>
            <form action="" method="GET">
                <label for="a">Primeiro valor: <input type="number" id="a" name="a"></label>
                <br>
                <label for="b">Segundo valor: <input type="number" id="b" name="b"></label>
                <br>
                <label for="c">Terceiro valor: <input type="number" id="c" name="c"></label>
                <br>
                <button type="submit">OK</button>
            </form>
        </fieldset>
        <div>
            <?php
                $a = $_GET["a"];
                $b = $_GET["b"];
                $c = $_GET["c"];

                $triangulo = new triangulo($a, $b, $c);

                class triangulo{
                    private $a;
                    private $b;
                    private $c;

                    public function __construct($a, $b, $c){
                        $this-> a = $a;
                        $this-> b = $b;
                        $this-> c = $c;
                    }

                    public function obterTipo(){
                        if ($this->a == $this->b && $this->b == $this->c){
                            echo "Triangulo EQUILATERO";
                        }elseif($this->a == $this->b || $this->b == $this->c || $this->c == $this->a){
                            echo "Triangulo ISOSCELES";
                        }else{
                            echo "Triangulo ESCALENO";
                        }
                    }
                    
                    public function obterPerimetro(){
                        return $this->a + $this->b + $this->c
                    }
                }
                echo $triangulo->obterTipo();
            ?>
        </div>
    </div>
</body>
</html>
