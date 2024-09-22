<?php
// Script que incrementa o valor do contador
// Autor: Juliano Niederauer
// http://www.niederauer.com.br
 
$arquivo = "contador.txt";


if(file_exists($arquivo))
{
	// lê o valor atual
	$fd = fopen($arquivo, "r");
		$valor=fgets($fd, 4096);
	fclose ($fd);
}
else
	$valor=0;

$valor++;

// grava o novo valor
$fd = fopen ($arquivo, "w");
	fwrite ($fd, $valor);
fclose ($fd);

echo $valor;
?>
