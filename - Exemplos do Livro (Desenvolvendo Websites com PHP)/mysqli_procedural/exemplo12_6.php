<?php

	include "conecta_mysqli.inc";
	$resultado = mysqli_query ($conexao,"SELECT * FROM produtos");
	$linhas = mysqli_num_rows ($resultado);

	for ($i=0 ; $i<$linhas ; $i++)
	{
		$registro = mysqli_fetch_array($resultado);
		$nome = $registro["nome_produto"];
		$preco = $registro["preco"];
		echo "Nome do produto: $nome <br>";
		echo "Preço: $preco <br>";
	}

	mysqli_close($conexao);
?>
