<?php  
// Criando Funções

/*comando nome_função(){
*
* }
*/

function exibirNome() {
	echo "Meu nome é Juliano";
}

// chamando a função criada
exibirNome();

echo "<hr>";

// passando parâmetros ($nome)
/*
function exibirNome($nome){
	echo "Meu nome é $nome";
}

exibirNome("Vitor Guimarães Corrêa");
*/

echo "<hr>";

function calcularMedia($nome, $n1, $n2, $n3, $n4){
	$media = ($n1 + $n2 + $n3 + $n4) / 4;
	if($media >= 7):
	echo "$nome foi aprovado com a média $media.<br>";
else:
	echo "$nome foi reprovado.<br>";
endif;
}

calcularMedia("João", 5, 7, 9, 10);

calcularMedia("Leila", 4, 7, 3, 5);
?>