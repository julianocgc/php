<?php
// bin2hex — Converte um dado binário em representação hexadecimal

$binary = "11111001";
$hex = dechex(bindec($binary));
echo $hex;
?>  