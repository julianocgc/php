<?php
include "conecta_mysql.inc";
$resultado = $mysqli->query("DELETE FROM produtos");
$linhas = $mysqli->affected_rows;
$mysqli->close();
echo "<p align=\"center\">Foram exclu�dos $linhas produtos!</p>";
?>
