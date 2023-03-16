<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
	<script>
		const naipes = ["♢", "♣", "♡", "♠"];
		const valores = ["A", "2", "3", "4", "5", "6", "7", "8", "9", "10", "J", "Q", "K"].values();
		const baralho = [];
		const jogador = [
			{nome: "Maria de Copas"      , cartas: []},
			{nome: "Luís Valete"         , cartas: []},
			{nome: "Fernanda Rainha"     , cartas: []},
			{nome: "Marcos Espadas"      , cartas: []},
			{nome: "Carlos Nove de Paus" , cartas: []},
			{nome: "Aurélio Ás de Ouros" , cartas: []},
			{nome: "Juliana Reis Coringa", cartas: []}
		];
		var posicao=0;
		const cartasParaDistribuir= [];
		const jogadorComADeOuros = [];
		const jogadorComCartaReal = [];

//faz o baralho

		for (let valor of valores){
			for(let naipe of naipes){
				baralho.push(valor+naipe);
			}
		}

//embaralha as cartas
		
		function embaralhandoCartas(){
			for(let i=0;i<baralho.length;i++){
				posicao = (Math.floor(Math.random() * baralho.length));
				cartasParaDistribuir.push(baralho[posicao]);
			}
		}

//distribui as cartas

		embaralhandoCartas()
		for(let i=0;i<5;i++){
			jogador.forEach(
				j => j.cartas.push(cartasParaDistribuir.pop())  	
			)
		}

// verifica quem tem ás de ouros

		jogador.forEach( j=> {
			for (let i=0;i<5;i++){
				if (j.cartas[i]=="A♢"){
					jogadorComADeOuros.push(j.nome + " tem A♢")
				}
			}
		})
	
// verifica se todos tem  J, Q ou K
		
		function buscandoCartaReal(Q, K, J){
			jogador.forEach( j=> {
				for (let i=0;i<5;i++){
					if(j.cartas[i]==Q+"♢" || j.cartas[i]==K+"♢" || j.cartas[i]==j+"♢" || j.cartas[i]==Q+"♣" || j.cartas[i]==K+"♣" || j.cartas[i]==J+"♣" || j.cartas[i]==Q+"♡" || j.cartas[i]==K+"♡" || j.cartas[i]==J+"♡" || j.cartas[i]==Q+"♠" || j.cartas[i]==K+"♠" || j.cartas[i]==J+"♠")jogadorComCartaReal.push(j.nome)

					//switch (j.cartas[i]){
						//case Q+"♢" || k+"♢" || j+"♢":
						//	jogadorComCartaReal.push(j.nome, j.cartas)
						//	break;
						//case Q+"♣" || K+"♣" || J+"♣":
						//	jogadorComCartaReal.push(j.nome + " tem.")
						//	break;
						//case Q+"♡" || K+"♡" || J+"♡":
						//	jogadorComCartaReal.push(j.nome + " tem.")
						//	break;
						//case Q+"♠" || K+"♠" || J+"♠":
						//	jogadorComCartaReal.push(j.nome + " tem.")
						//	break;	
					//}
				}
			})
		}
		buscandoCartaReal("Q", "K", "J");
		
	</script>
</body>
</html>