<?php
	include "conecta_mysql.inc";
	$resultado = mysql_query ("SELECT * FROM produtos");
		$objeto = mysql_fetch_object ($resultado);
		echo "Nome do produto: " . $objeto->nome_produto . "<br>";
		echo "Pre�o: " . $objeto->preco;
	mysql_close($conexao);
?>
