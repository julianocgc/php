<?php
// polimorfismo é o ato de reescrever um código herdado por uma classe pai
class Animal {
	public function Andar() {
		echo "O animal andou.";
	}
	public function Correr() {
		echo "O animal correu.";
	}
}
// herda todos os atributos e métodos da classe animal
class Cavalo extends Animal {
	public function Andar() {
		// instanciar uma classe dentro de outra classe
		$this->Correr();
	}
}

$animal = new Cavalo();
$animal->Andar();

?>