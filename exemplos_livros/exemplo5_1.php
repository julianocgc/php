<?php
ini_set('default_charset','UTF-8');
	$prova1 = 7;
	$prova2 = 5;
	$nota = ($prova1 + $prova2) / 2;
	if ($nota < 3)
		$desempenho = "PÉSSIMO";
	elseif ($nota < 5) 
		$desempenho = "RUIM";
	elseif ($nota < 7)
		$desempenho = "MÉDIO";
	elseif ($nota < 9)
		$desempenho = "BOM";
	else
		$desempenho = "EXCELENTE";
	echo "O seu desempenho foi $desempenho";
?>