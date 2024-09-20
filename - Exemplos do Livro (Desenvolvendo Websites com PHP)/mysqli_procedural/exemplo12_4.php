<?php

	include "conecta_mysqli.inc";
		$resultado = mysqli_query ($conexao,"SELECT * FROM produtos");
		$linhas = mysqli_num_rows ($resultado);
	mysqli_close($conexao);

	echo "<p align=\"center\">A consulta retornou $linhas registros!</p>";

?>
