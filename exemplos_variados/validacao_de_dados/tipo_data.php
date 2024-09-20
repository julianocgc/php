<?php
$valor = '25/12/2016';
$arraData = explode('/', $valor);
 
if(checkdate($arraData[1], $arraData[0], $arraData[2])):
    echo 'Data válida.';
else:
    echo 'Data inválida.';
endif; 
 
// Saída Data válida 
?>