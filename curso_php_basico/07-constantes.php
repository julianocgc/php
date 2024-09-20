<?php
// uma CONSTANTE é um identificador para um valor único que não pode alterar durante a execução do script
// CONSTANTES são GLOBAIS
// VARIÁVEIS são GLOBAIS ou LOCAIS
// nome - valor
define("NOME", "José Carlos");
define("IDADE", 24) ;
define("ALTURA", 1.75);
define("CASADO", true);

define("TIMES", ['Vasco','Flamengo','Santos']);

echo NOME;
echo"<br>";

echo 'Meu nome é '.NOME.' e minha idade é '.IDADE.' e minha altura é '.ALTURA.'.';
echo "<hr>";
echo TIMES[1];
echo "<hr>";

function exibeNome(){ // criar função
	echo NOME;
}

exibeNome(); // chamar função
?>