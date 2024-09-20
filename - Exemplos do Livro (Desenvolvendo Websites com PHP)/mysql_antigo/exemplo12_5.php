<?php

	include "conecta_mysql.inc";
	$resultado = mysql_query ("SELECT * FROM produtos");
		$codigo = mysql_result ($resultado , 0 , 0);
		$nome = mysql_result ($resultado , 0 , "nome_produto");
		$preco = mysql_result ($resultado , 0 , "preco");
	mysql_close($conexao);

	echo "Código do produto: $codigo <br>";
	echo "Nome do produto: $nome <br>";
	echo "Preço do produto: $preco";

?>
