<?php

$meses = array ("Janeiro", "Fevereiro", "Mar�o", "Abril", "Maio", "Junho", "Julho", "Agosto", "Setembro", "Outubro", "Novembro", "Dezembro");

$dia = date ("d", time( ));
$mes = date ("m", time( ));
$ano = date ("Y", time( ));

echo $dia . " de " . $meses [$mes-1] . " de " . $ano;

?>
