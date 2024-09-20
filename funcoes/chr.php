<?php
// Retorna um caracter específico
$str = "A string termina em escape: ";
$str .= chr(27); 
echo $str;

/* Muitas vezes isso é mais útil */

$str = sprintf("The string ends in escape: %c", 27);
?>