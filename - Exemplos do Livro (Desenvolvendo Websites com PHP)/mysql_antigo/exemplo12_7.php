<?php
	include "conecta_mysql.inc";
	$resultado = mysql_query ("SELECT * FROM produtos");
	$linhas = mysql_num_rows ($resultado);
	
	for ($i=0 ; $i<$linhas ; $i++)
	{
		$registro = mysql_fetch_row($resultado);
		echo "Código do produto: $registro[0] <br>";
		echo "Nome do produto: $registro[1] <br>";
		echo "Descrição: $registro[2] <br>";
		echo "Preço: $registro[3] <br>";
		echo "Peso: $registro[4] <br>";
		echo "Informações adicionais: $registro[7] <br><br>";
	}

	mysql_close($conexao);
?>
