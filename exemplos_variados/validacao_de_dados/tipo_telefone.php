<?php
$valor = '(99) 99999-9999';
 
if (preg_match('/^\([0-9]{2}\)?\s?[0-9]{4,5}-[0-9]{4}$/', $valor)):
    echo 'Telefone válido';
else:
    echo 'Telefone inválido';
endif;
 
// Saída Fone válido
?>