<?php
/*
public - Fará com que não haja ocultação nenhuma, toda propriedade ou método declarado com public, ficarão acessíveis por todos que quiserem acessá-los.

protected - Visibilidade protected faz com que todos os herdeiros vejam as propriedades ou métodos protegidos como se fossem públicos.

private - Ao contrário do public, esse modificador faz com que qualquer método ou propriedade seja visível somente pela classe que a declarou.
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

?>