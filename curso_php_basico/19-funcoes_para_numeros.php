<?php
// Funções para Números
/*
* number_format- formato de números
* round- arredondar valores pra cima ou pra baixo
* ceil- arredondar valores pra cima
* floor- arredondar valores para baixo
* rand- gera números aleatórios entre dois valores
*/

// (variável, casas decimais, separador, separador de milhar)
$db = 1234.56;
$preco = number_format($db, 2, ",", ".");
echo "O valor do produto é R$ $preco";

echo "<hr>";

echo round(3.6);

echo "<hr>";

echo ceil(8.1);

echo "<hr>";

echo floor(8.9);

echo "<hr>";

echo rand(1, 20);
?>