<?php
include "valida_cookies.inc";

// obt�m os valores digitados
$usuario = $_COOKIE["usuario"];
$tipo = $_POST["tipo"];
$descricao = $_POST["descricao"];
$mes = $_POST["mes"];
$ano = $_POST["ano"];
$valor = $_POST["valor"];
$valor = str_replace(",", ".", $valor);
$data = "$ano-$mes-01";

if($descricao=="nova")
    $nova_descricao = $_POST["descricao_nova"];
else
    $nova_descricao = $_POST["descricao_existente"];

$comandoSQL = "INSERT INTO receitas_despesas (usuario,descricao,tipo,data,valor) VALUES ";
$comandoSQL .= " ('$usuario', '$nova_descricao', '$tipo', '$data', $valor)";

// acesso ao banco de dados
include "conecta_banco.inc";
$res = $con->query($comandoSQL);

echo "<html><body>";
echo "<p align=\"center\">Inclus�o realizada com sucesso!</p>";
echo "<p align=\"center\"><a href=\"incluir.php?tipo=$tipo\">Incluir outra</a></p>";
echo "<p align=\"center\"><a href=\"principal.php\">Voltar</a></p>";
echo "</body></html>";

$con->close();
?>

