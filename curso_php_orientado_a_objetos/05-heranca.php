<?php
/* 
herança é um recurso que permite que classescompartilhem atributos e métodos a fim de reaproveitar códigos ou comportamentos generalizados
*/

class Veiculo {
		public $modelo;
	public $cor;
	public $ano;

	public function Andar() {
		echo "Andou";
	}

	public function Parar() {
		echo "Parou";
	}
}

// classe carro está herdando os atributos e métodos da classe Veiculo (extends)
class Carro extends Veiculo {
	public function ligarLimpador() {
		echo "Limpando em 321.";
	}
}

class Moto extends Veiculo {
	public function darGrau() {
		echo "Dando grau em 321.";
	}
}

$carro = new Carro();
$carro->modelo = "Gol";
$carro->cor = "Vermelho";
$carro->ano = 2018;
$carro->Andar();
echo "<br>";
$carro->ligarLimpador();
echo "<br>";
var_dump($carro);

echo "<br>";

$moto = new Moto();
$moto->modelo = "Honda Biz";
$moto->cor = "Azul";
$moto->ano = 2017;
$moto->Parar();
echo "<br>";
$moto->darGrau();
echo "<br>";
var_dump($moto);
?>