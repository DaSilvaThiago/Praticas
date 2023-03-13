<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script>
        //console.log("abcxyz".includes("xy")); retorna verdadeiro ou falso, caso o valor esperado esteja entre os valores comparados.
        
        //console.log("abcxyz".indexOf("xy")); busca a chave = posição do valor solicitado. 

        //console.log("banana maçã pêra maçã banana".replaceAll("maçã", "abacaxi")); ele troca o valor do objeto selecionado pelo segundo parametro passado, sem all ele troca a primeira posição que vai ter o valor, o all troca todas com o mesmo valor.

        //console.log("banana".startsWith("ban")); retorna verdadeiro ou falso se o parametro passado estiver no valor comparado, no começo.

        //console.log("banana".endsWith("ana")); retorna verdadeiro ou falso se o parametro passado estiver no valor comparado, no final. 

        //console.log("Hoje é sexta-feira".charAt(7)); pega o char da posição 7 e retorna.
    
        //console.log("Hoje é sexta-feira".substring(7)); retorna o restante do valor apartir da posição expecificada.

        //console.log("Hoje é sexta-feira".substring(7, 12)); retorna os valores que são contidos entre as posições passadas.

        //console.log("Hoje é Sexta-Feira".toUpperCase()); deixa todos os valores em letra maiuscula.

        //console.log("Hoje é Sexta-Feira".toLowerCase()); deixa todos os valores em letra minuscula.

        //console.log("          Hoje é Sexta-Feira          ".trim()); ele tira os espaços em branco do começo e fim.
        
        //console.log("          Hoje é Sexta-Feira          ".trimEnd()); ele tira os espaços em branco do fim.
        
        //console.log("          Hoje é Sexta-Feira          ".trimStart()); ele tira os espaços em branco do começo.

        //-------------------------------------------------------------------------------

       

        function enviar(){
            const nome = document.querySelector("#nome").value;
            const telefone = document.querySelector("#telefone").value;
            const endereco = document.querySelector("#endereco").value;
            const email = document.querySelector("#email").value;
            const erroNome = document.querySelector("#erroNome");
            const erroTelefone = document.querySelector("#erroTelefone");
            const erroEndereco = document.querySelector("#erroEndereco");
            const erroEmail = document.querySelector("#erroEmail");

            let envio = false;

            if(nome == ""){
                erroNome.innerHTML = "preencha o campo nome!";
                erroNome.style.display = "block";
                envio = true;
            }else{erroNome.style.display="none";}
            if(telefone == ""){
                erroTelefone.innerHTML = "preencha o campo telefone!";
                erroTelefone.style.display = "block";
                envio = true;
            }else if(telefone.length !== 11){
                erroTelefone.innerHTML = "preencha o campo telefone com 11 digitos!";
                erroTelefone.style.display = "block";
                envio = true;
            }else{erroTelefone.style.display="none";}
            if(endereco == ""){
                erroEndereco.innerHTML = "preencha o campo endereço!";
                erroEndereco.style.display = "block";
                envio = true;
            }else{erroEndereco.style.display = "none";}
            if(email == ""){
                erroEmail.innerHTML = "preencha o campo Email!";
                erroEmail.style.display = "block";
                envio = true;
            }else if(!email.includes("@")){
                erroEmail.innerHTML = "preencha o campo Email com @";
                erroEmail.style.display = "block";
                envio = true;
            }else{erroEmail.style.display="none";}

            if(!envio){
                document.querySelector("button").type = "submit";
            }
        }
    </script>
    <style>
        .erro{
            background-color: #FFc0c0;
            color: red;
        }
    </style>
</head>
<body>
    <h1>Formulário</h1>
    <div>
        <fieldset>
            <form action="" method="GET">
                <p>
                    <label for="nome">Nome: </label>
                    <input type="text" id="nome" name="nome">
                    <div id="erroNome" style="display:none" class="erro"></div>
                </p>
                <p>
                    <label for="telefone">Telefone: </label>
                    <input type="text" id="telefone" name="telefone">
                    <div id="erroTelefone" style="display:none" class="erro"></div>
                </p>
                <p>
                    <label for="endereco">Endereço: </label>
                    <input type="text" id="endereco" name="endereco">
                    <div id="erroEndereco" style="display:none" class="erro"></div>
                </p>
                <p>
                    <label for="email">Email: </label>
                    <input type="text" id="email" name="email">
                    <div id="erroEmail" style="display:none" class="erro"></div>
                </p>
                <p>
                    <button type="button" onclick="enviar()">Enviar</button>
                </p>
            </form>
        </fieldset>
    </div>
</body>
</html>