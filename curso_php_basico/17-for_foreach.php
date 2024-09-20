<?php
// valor inicial - condição - incremento
for ($contador = 0; $contador <= 10; $contador++):
	echo "O contador é $contador <br>";
endfor;

echo "<hr>";

// para outra tabuada altere o 8
for ($contador = 0; $contador <= 10; $contador++):
	echo "8 x $contador = ".($contador*8)."<br>";
endfor;

echo "<hr>";

$cores = array("Verde", "Amarelo", "Azul", "Branco");

foreach($cores as $indice => $valor):
	echo $indice."-".$valor."<br>";
endforeach;
?>