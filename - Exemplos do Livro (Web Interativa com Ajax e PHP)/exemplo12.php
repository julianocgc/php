<?php
$gmtDate = gmdate("D, d M Y H:i:s"); 
header("Expires: {$gmtDate} GMT"); 
header("Last-Modified: {$gmtDate} GMT"); 
header("Cache-Control: no-cache, must-revalidate"); 
header("Pragma: no-cache");
header("Content-Type: text/html; charset=ISO-8859-1");

$nomeCaixa = $_GET["nomeCaixa"];
$valor = $_GET["valor"];
if(isset($_GET["marcada"]))
	echo "O servidor j� foi informado que voc� <b>MARCOU</b> a checkbox <b>$nomeCaixa</b>, na op��o de valor <b>$valor</b>.";
else
	echo "O servidor j� foi informado que voc� <b>DESMARCOU</b> a checkbox <b>$nomeCaixa</b>, na op��o de valor <b>$valor</b>.";
?>
