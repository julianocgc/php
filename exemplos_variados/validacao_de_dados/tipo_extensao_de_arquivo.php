<?php
$extensoes_aceitas = array('bmp' ,'png', 'svg', 'jpeg', 'jpg');
$array_extensoes   = explode('.', $_FILES['foto']['name']);
$extensao = strtolower(end($array_extensoes));
 
if (array_search($extensao, $extensoes_aceitas) === false):
    echo 'Extensão válida';
else:
    echo 'Extensão inválida';
endif;
?>