<?php

	include "conecta_mysqli.inc";
		$resultado = mysqli_query ($conexao, "DELETE FROM produtos");
		$linhas = mysqli_affected_rows ($conexao);
	mysqli_close($conexao);

   echo "<p align=\"center\">Foram exclu�dos $linhas produtos!</p>";

?>
