<?php
/*
* Condicionais
* if
* else
* elseif
* endif
 */

$numero = 13;

if ($numero == 10):
	echo "É igual a 10";
elseif($numero <= 9):
	echo "É menor ou igual a 9";
else:
	echo "É diferente de 10";
endif;

echo "<hr>";

// maneira mais simples do comando
$media = 3;
echo($media >= 7) ? "Aprovado" : "Reprovado";
?>