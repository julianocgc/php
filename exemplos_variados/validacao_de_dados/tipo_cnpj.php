<?php
function isCNPJValido($valor){
 
    $cnpj = str_pad(str_replace(array('.','-','/'),'',$valor),14,'0',STR_PAD_LEFT);
    
    if (strlen($cnpj) != 14):
        return false;
    else:
        for($t = 12; $t < 14; $t++):
            for($d = 0, $p = $t - 7, $c = 0; $c < $t; $c++):
                $d += $cnpj{$c} * $p;
                $p  = ($p < 3) ? 9 : --$p;
            endfor;
            $d = ((10 * $d) % 11) % 10;
            if($cnpj{$c} != $d):
                return false;
            endif;
        endfor;
        return true;
    endif;
}
 
$valor = '36172186000103';
 
if(isCNPJValido($valor)):
    echo 'CNPJ válido.';
else:
    echo 'CNPJ inválido.';
endif; 
 
// Saída CNPJ válido
?>