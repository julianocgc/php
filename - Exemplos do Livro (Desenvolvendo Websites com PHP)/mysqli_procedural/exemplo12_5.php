<?php

	include "conecta_mysqli.inc";
	$resultado = mysqli_query ($conexao,"SELECT * FROM produtos");
		$registro = mysqli_fetch_array($resultado);
		$codigo = $registro[0];
		$nome = $registro["nome_produto"];
		$preco = $registro["preco"];
	mysqli_close($conexao);

	echo "Código do produto: $codigo <br>";
	echo "Nome do produto: $nome <br>";
	echo "Preço do produto: $preco";

?>
