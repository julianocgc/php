<?php

$str_conexao = "dbname=bdteste port=5432 user=postgres password=postgres";

if(!($conexao=pg_connect($str_conexao)))
{
	echo "N�o foi possivel estabelecer uma conex�o com o banco de dados.";
	exit;
}

?>
