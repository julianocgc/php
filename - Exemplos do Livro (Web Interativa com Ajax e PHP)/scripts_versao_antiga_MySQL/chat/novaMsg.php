<?php
session_start();
$idConversa = session_id();
include "conecta.php";
import_request_variables("gc");
if(!empty($msg)) {
	// verifica se a sess�o do usu�rio ainda est� aberta
	$res = mysql_query("SELECT * FROM chat WHERE nome='$idConversa' and msg=''");
	if(mysql_num_rows($res)>0)
		$res = mysql_query("INSERT INTO chat VALUES ('$nomeCliente','C','$msg')");
	else
		echo "<p>ATENDIMENTO J� ENCERRADO! <a href=\"indexCliente.php\">Voltar</a></p>";
}
?>