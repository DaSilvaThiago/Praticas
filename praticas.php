<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script>
        function tela(){
            let nCadastro = document.querySelector("#cadastro");
            $("#tela").load(`valor ${nCadastro} adicionado`);

        }
    </script>

    <style>
        #tela{
            width: 200px;
            height: 300px;
            border: 1px solid black;
            margin: 5px;
        }
    </style>
</head>
<body>
    <div>
        <h1>Numeros de 1 a 100.</h1>
        <input type="text" id="cadastro">
<button type="button" id="botaoTela" onclick="tela()">OK</button>
        <div id="tela">

        </div>
        <button type="button" id="botaoFinalizar" onclick="res()">Finalizar</button>
    </div>
</body>
</html>