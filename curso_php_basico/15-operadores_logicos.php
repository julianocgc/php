<?php
/*
* Operadores Lógicos
* Nos permitem fazer comparações entre expressões
* e (&& - and)
* ou (|| - or)
* ou exclusivo (xor) - um verdadeiro
* negação (!)
 */

$idade = 25;
$nome = "Vitor";

if(($idade == 27) || ($nome == "Vitor")):
	echo "É verdadeiro";
else:
	echo "É falso";
endif;
?>