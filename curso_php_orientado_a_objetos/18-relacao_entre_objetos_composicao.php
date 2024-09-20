<?php  
// composição = uma classe cria a instância de outra classe dentro de si própria, sendo assim, quando ela for destruida, a outra classe também será

class Pessoa { // criação da classe
	public function atribuiNome($nome) { // criação do método
		return "O nome da pessoa é ".$nome;
	}

}

class Exibe {
	public $pessoa;
	public $nome;

	function __construct($nome) {
		$this->pessoa = new Pessoa(); // classe Pessoa instanciada dentro da classe Exibe
		$this->nome = $nome;
	}

	// criação do método
	public function exibeNome() {
		echo $this->pessoa->atribuiNome($this->nome);
	}
}

	$exibe = new Exibe("José");
	$exibe->exibeNome();


?>