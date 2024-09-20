<?php
$valor = 'wllfl@ig.com.br';
 
if(filter_var($valor, FILTER_VALIDATE_EMAIL)):
    echo 'E-mail válido.';
else:
    echo 'E-mail inválido.';
endif; 

// Saída E-mail válido 
?>