<?php
/*
* Condicionais
* switch
* case
 */

$cor = "verde";

switch ($cor):
	case "vermelho":

	echo "Sua cor preferida é o vermelho";
	break; // se condição for verdadeira pára a execução do código

	case "verde":
	echo "Sua cor preferida é o verde";
	break; // se condição for verdadeira pára a execução do código

	case "azul":
	echo "Sua cor preferida é o azul";
	break; // se condição for verdadeira pára a execução do código

	default:
	echo "Sua cor preferida não está nas opções";

endswitch;
?>