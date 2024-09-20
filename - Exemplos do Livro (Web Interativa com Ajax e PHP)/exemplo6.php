<?php
$gmtDate = gmdate("D, d M Y H:i:s"); 
header("Expires: {$gmtDate} GMT"); 
header("Last-Modified: {$gmtDate} GMT"); 
header("Cache-Control: no-cache, must-revalidate"); 
header("Pragma: no-cache");
header("Content-Type: text/html; charset=ISO-8859-1");

// array de informa��es sobre os times
$times = array (
	"gremio" => "Time de PORTO ALEGRE (RS)<br>Est�dio: Arena do Gr�mio",
	"palmeiras" => "Time de S�O PAULO (SP)<br>Est�dio: Palestra It�lia",
	"cruzeiro" => "Time de BELO HORIZONTE (MG)<br>Est�dio: Mineir�o",
	"flamengo" => "Time do RIO DE JANEIRO (RJ)<br>Est�dio: Maracan�",
	"criciuma" => "Time de Crici�ma (SC)<br>Est�dio: Heriberto Hulse"
);

$time = $_GET["time"];
if(isset($times[$time]))
	echo $times[$time];
else
	echo "Time n�o encontrado!";
?>
