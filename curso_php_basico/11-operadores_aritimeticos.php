<?php
/*
* Operadores Aritiméticos
*
* São usados com valores numéricos para executar operações aritiméticas comuns, como adição, subtração, multiplicação, divisão, etc.
*
* Adição +
* Subtração -
* Multiplicação *
* Divisão /
* Módulo %
* Exponenciação **
*/

echo 10 + 10;
echo "<br>";
echo 15 - 6;
echo "<br>";
echo 5 * 5;
echo "<br>";
echo 9 / 3;
echo "<br>";
echo 15 % 4;
echo "<br>";
echo 5 ** 3;
echo "<hr>";

$a = 10;
$b = 20;
$c = 30;
$d = 5;
$e = 16;

$adicao = $a + $b;
echo $adicao;
echo "<br>";

$subtracao = $c - $a;
echo $subtracao;
echo "<br>";

$multiplicacao = $d * $a;
echo $multiplicacao;
echo "<br>";

$divisao = $c / $a;
echo $divisao;
echo "<br>";

$modulo = $e % $d;
echo $modulo;
echo "<br>";

$exponenciacao = $a ** $d;
echo $exponenciacao;
echo "<br>";
echo"<hr>";

echo (5 + 7 + 9 + 8) / 4;
?>