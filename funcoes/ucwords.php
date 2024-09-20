<?php
// ucwords — Converte para maiúsculas o primeiro caractere de cada palavra
$foo = 'hello world!';
$foo = ucwords($foo);             // Hello World!

echo $foo;
echo "<br><br>";

$bar = 'HELLO WORLD!';
$bar = ucwords($bar);             // HELLO WORLD!
$bar = ucwords(strtolower($bar)); // Hello World!

echo $bar;
?>