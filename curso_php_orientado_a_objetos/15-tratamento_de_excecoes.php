<?php
// ocorrência anormal que afeta o funcionamento da aplicação
// exception é a classe base para todas exceptions
// message, code, file,line

class Newsletter {

	public function cadastrarEmail($email) {
		if(!filter_var($email, FILTER_VALIDATE_EMAIL)):
			throw new Exception("Este e-mail é inválido", 121);
		else:
			echo "E-mail cadastrado com sucesso!";
		endif;
	}
}

// instanciar a classe
$newsletter = new Newsletter();

// chamar o método
try {
$newsletter->cadastrarEmail("contato@");
} catch(Exception $e) {
	echo "Mensagem: ".$e->getMessage(). "<br>";
	echo "Código: ".$e->getCode()."<br>";
	echo "Linha: ".$e->getLine()."<br>";
	echo "Arquivo: ".$e->getFile()."<br>";
}
?>