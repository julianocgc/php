<?php
// ucfirst — Converte para maiúscula o primeiro caractere de uma string

$foo = 'hello world!';
$foo = ucfirst($foo);             // Hello world!

echo $foo;
echo "<br><br>";

$bar = 'HELLO WORLD!';
$bar = ucfirst($bar);             // HELLO WORLD!
$bar = ucfirst(strtolower($bar)); // Hello world!

echo $bar;
?>