<?php 
// datas
// d = dia com 2 digitos
// D = dia no formato de texto com 3 digitos
// m = mês com 2 digitos
// M = mês no formato texto com 3 digitos
// y = ano com 2 digitos
// Y = ano com 4 digitos
// l = dia no formato texto
// h = hora no formato de 12 horas
// H = hora no formato de 24 horas
// i = minutos
// s = segundos
// A = AM - PM
date_default_timezone_set('America/Sao_Paulo'); // setar timezone (hora atualizada)
echo date('d/m/Y H:i:s A');
echo "<hr>";

$date = date('Y-m-d'); //date
$datetime = date('Y-m-d H:i:s'); //datetime

echo $datetime;
echo "<hr>";

// time
// quantidade de segundos desde 1970
echo time();
echo "<hr>";

$time = time();
echo date('d/m/Y', $time);
echo "<hr>";

// mktime
$data_pagamento = mktime(15, 30, 00, 02, 15, 2023);
echo date('d/m - h:i', $data_pagamento);
echo "<hr>";

// strtotime
$data = '2019-04-10 13:30:00';
$data = strtotime($data);

echo date('d/m/Y', $data);
 ?>