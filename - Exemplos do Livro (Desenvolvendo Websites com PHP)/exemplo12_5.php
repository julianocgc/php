<?php
include "conecta_mysql.inc";
$resultado = $mysqli->query("SELECT * FROM produtos");
$registro = $resultado->fetch_array();
$codigo = $registro[0];
$nome = $registro["nome_produto"];
$preco = $registro["preco"];
$mysqli->close();

echo "C�digo do produto: $codigo <br>";
echo "Nome do produto: $nome <br>";
echo "Pre�o do produto: $preco";
?>