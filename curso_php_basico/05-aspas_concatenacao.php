<?php
$nome = 'Juliano';

echo '<hr>';
echo "Meu nome é $nome<br>"; // aspas duplas são interpretativas (código funciona sem concatenação)
echo 'Meu nome é $nome<br>'; // aspas simples não são interpretativas (código não funciona sem concatenação)
echo 'Meu nome é '.$nome.' e minha idade é 38<br>';

echo "Meu nome é \"$nome\"<br>"; // aspas duplas são interpretativas (código funciona sem concatenação)
echo 'Meu nome é \'$nome\'<br>'; // aspas simples não são interpretativas (código não funciona sem concatenação)
echo 'Meu nome é '.$nome.' e minha idade é \'38\'<br>';
?>