<?php  
// __clone
// __construct
// __invoke
// __tostring
// __get
// __set

class Pessoa { // criação da classe
	private $dados = array(); // atributo da classe

	public function __set($nome, $valor) {
		$this->dados[$nome] = $valor;
	}

	public function __get($nome) {
		return $this->dados[$nome];
	}

	public function __tostring(){
		return "Tentei imprimir o objeto.";
	}

	public function __invoke() {
		return "Objeto como função.";
	}
}

$pessoa = new Pessoa(); // instanciar classe
$pessoa->nome = "Juliano"; // atributos
$pessoa->idade = 50; // atributos
$pessoa->sexo = "M"; // atributos

echo $pessoa;
?>