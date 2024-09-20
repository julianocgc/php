<?php
$valor = '18135-690';
 
if (preg_match('/[0-9]{5,5}([-]?[0-9]{3})?$/', $valor)):
    echo 'CEP válido';
else:
    echo 'CEP inválido';
endif;
 
// Saída CEP válido 
?>