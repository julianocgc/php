<?php
include "conecta_mysql.inc";
$resultado = $mysqli->query("SELECT * FROM produtos");
$linhas = $resultado->num_rows;
for ($i=0 ; $i<$linhas ; $i++)
{
	$registro = $resultado->fetch_row();
	echo "C�digo do produto: $registro[0] <br>";
	echo "Nome do produto: $registro[1] <br>";
	echo "Descri��o: $registro[2] <br>";
	echo "Pre�o: $registro[3] <br>";
	echo "Peso: $registro[4] <br>";
	echo "Informa��es adicionais: $registro[7] <br><br>";
}
$mysqli->close();
?>