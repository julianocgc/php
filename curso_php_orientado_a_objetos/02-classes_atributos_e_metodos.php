<?php  
// como criar as classes
// como definir os atributos
// como criar os métodos
// trabalhar com objetos definindo sua estrutura

// criação da classe ou objeto
class Pessoa {
	// criação dos atributos
	public $nome;
	public $idade;

	// criar métodos ou funções
	public function Falar() {
		echo "Falou <br>";
	}
}

// instanciar uma classe
$juliano = new Pessoa();
$juliano->nome = "Juliano Guimarães Corrêa";
$juliano->idade = 38;
$juliano->Falar();
echo $juliano->nome;
?>