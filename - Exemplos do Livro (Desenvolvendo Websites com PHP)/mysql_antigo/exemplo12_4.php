<?php

	include "conecta_mysql.inc";
		$resultado = mysql_query ("SELECT * FROM produtos");
		$linhas = mysql_num_rows ($resultado);
	mysql_close($conexao);

	echo "<p align=\"center\">A consulta retornou $linhas registros!</p>";

?>
