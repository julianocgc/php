<?php
	include "conecta_mysqli.inc";
	$resultado = mysqli_query ($conexao,"SELECT * FROM produtos");
		$objeto = mysqli_fetch_object ($resultado);
		echo "Nome do produto: " . $objeto->nome_produto . "<br>";
		echo "Pre�o: " . $objeto->preco;
	mysqli_close($conexao);
?>
