<?php
// while (enquanto)

$contador = 1;

// enquanto a condição for verdadeira
while($contador <= 10):
	echo "Contador e $contador<br>";
	$contador++;
endwhile;

echo "<br>";

$contador = 1;

// executa o trecho de código e depois faz a verificação
do {
	echo "Contador e $contador<br>";
	$contador++;
} while( $contador <= 10);
?>