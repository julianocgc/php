<?php
ini_set('default_charset','UTF-8');
	...
	switch ($opcao) 
	{
		case 's':
			echo "Você escolheu a opção SIM";
			break;
		case 'n':
			echo "Você escolheu a opção NÃO";
			break;
		
		default:
			echo "A opção digitada é inválida";
			break;
	}
?>