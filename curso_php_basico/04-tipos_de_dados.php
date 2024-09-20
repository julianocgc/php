<?php
/* Tipos Escalares */
// string
$nome = "Olá mundo";
var_dump($nome); // mostra informações da variavel
if(is_string($nome)):
	echo "É uma string";
else:
	echo "Não é uma string";
endif;
echo "<hr>";

// int
$idade = 27;
var_dump($idade);
if(is_int($idade)):
echo "É um inteiro";
else:
	echo "Não é um inteiro";
endif;
echo "<hr>";

// float
$altura = 1.77;
var_dump($altura);
if(is_float($altura)):
	echo "É um float";
else:
	echo "Não é um float";
endif;
echo "<hr>";

// boolean
$admin = true;
var_dump($admin);
if(is_bool($admin)):
	echo "É um booleano";
else:
	echo "Não é um booleano";
endif;
echo "<hr>";

/* Tipos Compostos */
//array
$carros = array("Gol","Uno","Camaro",12,20.6,true);
var_dump($carros);
if(is_array($carros)):
	echo "É um array";
else:
	echo "Não é um array";
endif;
echo "<hr>";

//object
class Cliente {   // criar uma classe
	public $nome; // criar um atributo
	public function atribuirNome($nome){
		$this->$nome = $nome;
	} // criar método

}

$cliente = new Cliente();
$cliente->atribuirNome("Juliano");
var_dump($cliente);
if(is_object($cliente)):
	echo "É um objeto";
else:
	echo "Não é um objeto";
endif;
echo "<hr>";

/* Tipos Especiais */
//NULL
$cidade = NULL;
var_dump($cidade);

//Resource - Manipulação de dados

?>