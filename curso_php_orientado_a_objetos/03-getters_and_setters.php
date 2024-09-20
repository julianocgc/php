<?php

class Login {
	private $email;
	private $senha;

	// get = pega o valor
	public function getEmail() {
		return $this->email;
	}

	// set = passa por parâmetro
	public function setEmail($e) {
		$this->email = $e;
	}

	// get = pega o valor
	public function getSenha() {
		return $this->senha;
	}

	// set = passa por parâmetro
	public function setSenha($s) {
		$this->senha = $s;
	}

	public function Logar() {
		if($this->email == "teste@teste.com" and $this->senha == "123456"):
			echo "Logado com sucesso!";
		else:
			echo "Dados inválidos...";
		endif;
	}
}

$logar = new Login();
//$logar->email = "teste@teste.com";
//$logar->senha = "1234567";
$logar->setEmail("teste@teste.com");
$logar->setSenha("123456");
$logar->Logar();
echo "<br>";
echo $logar->getEmail();
echo "<br>";
echo $logar->getSenha();

?>