<?php
// self = referencia a constante dentro do escopo
// parent = referencia a constante da classe pai
class Pessoa {
	const nome = "Juliano"; // definir constante

	public function exibirNome() {
		echo self::nome; // criação da função ou método dentro do escopo
	}
}

class Juliano extends Pessoa {
	const nome = "Guimarães";

	public function exibirNome() {
		echo parent::nome;
	}
}

$juliano = new Juliano();
$juliano->exibirNome();

?>