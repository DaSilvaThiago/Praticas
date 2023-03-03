<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script>
        let cor= "verde";
        function mudarFarol(){
            if(cor=="verde"){
                document.querySelector("#farol").src = "imgDeFarol/amarelo.png";
                cor = "amarelo";
            }
            else if(cor == "amarelo"){
                document.querySelector("#farol").src= "imgDeFarol/vermelho.png";
                cor = "vermelho";
            }else{
                document.querySelector("#farol").src= "imgDeFarol/verde.png";
                cor = "verde";
            }
        }
    </script>
    <style>
        body{
            text-align: center;
        }
    </style>
</head>
<body>
    <div>
        <h1>Traffic sistem</h1>
        <img src="imgDeFarol/verde.png" alt="farol verde" id="farol">
        <br>
        <button type="button" onclick="mudarFarol()"></button>
    </div>
</body>
</html>