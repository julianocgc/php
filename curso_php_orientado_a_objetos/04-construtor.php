<?php
// toda vez que instanciamos uma classe o construtor é inicializado
// $variavel = new classe();
class Login {
	private $email;
	private $senha;
	private $nome;

	// exemplo construtor
	// no momento que instanciamos uma classe esse método é inicializado
	public function __construct($email, $senha, $nome) {
		$this->nome = $nome;
		$this->setEmail($email);
		$this->setSenha($senha);
	}

	public function getNome() {
		return $this->nome;
	}

	// get = pega o valor
	public function getEmail() {
		return $this->email;
	}

	// set = passa por parâmetro
	public function setEmail($e) {
		$email = filter_var($e, FILTER_SANITIZE_EMAIL);
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

$logar = new Login("teste@teste.com", "123456", "Juliano Guimarães");
//$logar->email = "teste@teste.com";
//$logar->senha = "1234567";

$logar->Logar();
echo "<br>";
echo $logar->getEmail();
echo "<br>";
echo $logar->getSenha();

?>