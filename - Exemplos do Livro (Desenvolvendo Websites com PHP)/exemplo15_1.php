<?php

	$nome = $_POST["nome"];
	$email = $_POST["email"];
	$sugestao = $_POST["sugestao"];

	$mensagem = "Sugest�o enviada por um visitante:\n\n";
	$mensagem .= "Nome: $nome\n";
	$mensagem .= "E-mail: $email\n";
	$mensagem .= "Sugest�o: $sugestao";
	mail("webmaster@umsite.com.br", "Sugestao", $mensagem);
	echo "Obrigado por enviar sua sugest�o!";

?>
