<?php
	include "conecta_mysql.inc";
	$resultado = mysql_query ("SELECT * FROM produtos");
	$linhas = mysql_num_rows ($resultado);
	
	for ($i=0 ; $i<$linhas ; $i++)
	{
		$registro = mysql_fetch_row($resultado);
		echo "C�digo do produto: $registro[0] <br>";
		echo "Nome do produto: $registro[1] <br>";
		echo "Descri��o: $registro[2] <br>";
		echo "Pre�o: $registro[3] <br>";
		echo "Peso: $registro[4] <br>";
		echo "Informa��es adicionais: $registro[7] <br><br>";
	}

	mysql_close($conexao);
?>
