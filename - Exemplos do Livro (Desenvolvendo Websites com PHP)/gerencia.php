<?php

$operacao = $_POST["operacao"];

if ($operacao == "inclusao")
{
	// realiza a inclus�o do produto
	echo "Produto inclu�do!";	

}

elseif ($operacao == "alteracao")
{
	// realiza a altera��o do produto
	echo "Produto alterado!";	
}

elseif ($operacao == "exclusao")
{
	// realiza a exclus�o do produto
	echo "Produto exclu�do!";	
}


?>
