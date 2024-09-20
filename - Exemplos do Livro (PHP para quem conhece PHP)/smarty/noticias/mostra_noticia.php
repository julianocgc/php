<meta http-equiv="Content-Type" content="text/html;charset=UTF-8" /> <!-- ajuste de acordo com a sua codificação: UTF-8 ou ISO-8859-1 -->
<?php
$id_noticia = $_GET['id'];
if(!is_numeric($id_noticia)) { echo "Notícia inválida."; exit(); }

// ------ acesso ao banco de dados ----------
$servidor = "localhost";
$usuario = "juliano";
$senha = "12345";
$banco = "test";

$con = new mysqli($servidor, $usuario, $senha, $banco);
$res = $con->query("SELECT titulo,texto,data_hora FROM noticias WHERE id=$id_noticia");
$num_linhas = $res->num_rows;

if($num_linhas>0)
{
	$dados = $res->fetch_array();
	$titulo = $dados["titulo"];
	$texto = $dados["texto"];

	/*
	// se tiver problemas com acentuação, substitua as duas linhas acima pelas seguintes, caso sua página tenha codificação UTF-8 e o banco de dados não (se for o oposto, use utf8_decode)
	$titulo = utf8_encode($dados["titulo"]);
	$texto = utf8_encode($dados["texto"]);
	*/
	$data = $dados["data_hora"];
}
$con->close();

// ---- define variáveis e exibe o template ----
require('../smarty/libs/Smarty.class.php');
$smarty = new Smarty;
$smarty->assign("titulo", $titulo);
$smarty->assign("texto", $texto);
$smarty->assign("data", $data);
$smarty->display("mostra_noticia.tpl");
?>
