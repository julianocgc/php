<?php

	include "conecta_mysql.inc";
	$resultado = mysql_query ("SELECT * FROM produtos");
	$linhas = mysql_num_rows ($resultado);

	for ($i=0 ; $i<$linhas ; $i++)
	{
		$nome = mysql_result ($resultado , $i , "nome_produto");
		$preco = mysql_result ($resultado , $i , "preco");
		echo "Nome do produto: $nome <br>";
		echo "Preço: $preco <br>";
	}

	mysql_close($conexao);
?>
