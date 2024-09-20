<?php  
// associação = acontece quando um objeto "utiliza" outro, porém, sem que eles dependam um do outro

class Pedido { // criação da classe
	public $numero; // atributo da classe
	public $cliente; // atributo da classe
}

class Cliente { // criação da classe
	public $nome; // atributo da classe
	public $endereco; // atributo da classe
}

$cliente = new Cliente(); // criação do objeto
$cliente->nome = "Juliano Guimarães"; // atributo
$cliente->endereco = "Rua Exemplo, 000"; // atributo

$pedido = new Pedido(); // criação do objeto
$pedido->numero = "123"; // atributo
$pedido->cliente = $cliente; // atributo

$dados = array(
	'numero' => $pedido->numero,
	'nome_cliente' => $pedido->cliente->nome,
	'endereco_cliente' => $pedido->cliente->endereco
);
?>