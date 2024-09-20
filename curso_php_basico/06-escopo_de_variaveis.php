<?php
// ESCOPO GLOBAL
$nome = "Juliano Guimarães";
$a = 1;
$b = 3;
$c = 7;

function exibeNome(){ // criar função
	// ESCOPO LOCAL
	global $nome;
	echo $nome;
}

exibeNome(); // chamar função
echo "<hr>";
/////////////////////////////////////////////////////////////

function exibeCidade(){ // criar função
	// ESCOPO LOCAL
	global $cidade;
	$cidade = "Rio de Janeiro";
}

exibeCidade(); // chamar função
echo $cidade;
echo "<hr>";
////////////////////////////////////////////////////////////

function soma(){ // criar função
	echo $GLOBALS['a'] + $GLOBALS['b'] + $GLOBALS['c'];
}

soma(); // chamar função