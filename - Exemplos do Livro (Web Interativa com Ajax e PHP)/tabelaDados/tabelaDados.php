<?php
$gmtDate = gmdate("D, d M Y H:i:s"); 
header("Expires: {$gmtDate} GMT"); 
header("Last-Modified: {$gmtDate} GMT"); 
header("Cache-Control: no-cache, must-revalidate"); 
header("Pragma: no-cache");
header("Content-Type: text/html; charset=ISO-8859-1");

include "conecta.php";
$acao=$_GET["acao"];
$nome=$_GET["nome"];
$nome=utf8_decode($nome);  // use esta linha para evitar problemas de acentua��o (caso seu BD esteja com outra codifica��o)
$preco=$_GET["preco"];
$cod=$_GET["cod"];


// atualiza��o de produto
if($acao=="atualizar") {
	if(!empty($nome) && !empty($preco)) {
		$preco = str_replace(",",".",$preco); // troca v�rgula por ponto
		if(is_numeric($preco)) {
			$res = mysqli_query($con, "UPDATE produtos SET nome='$nome', preco=$preco WHERE codigo=$cod");
			echo "atualizou";
		}
		else echo "Pre�o inv�lido!";
	}
	else echo "Voc� deve preencher todos os campos!";
}
// exclus�o de produto
elseif($acao=="excluir") { 
	$res = mysqli_query($con, "DELETE FROM produtos WHERE codigo=$cod");
	echo "excluiu";
}
// cadastro de produto
elseif($acao=="cadastrar") { 
	if(!empty($nome) && !empty($preco)) {
		$preco = str_replace(",",".",$preco); // troca v�rgula por ponto
		if(is_numeric($preco)) {
			$res = mysqli_query($con, "INSERT INTO produtos(nome,preco) VALUES ('$nome','$preco')");
			$novoCodigo = mysqli_insert_id($con);
			// retorna a palavra "cadastrou" seguida do c�digo gerado para o produto
			echo "cadastrou-$novoCodigo";	
		}
		else echo "Pre�o inv�lido!";
	}
	else echo "Voc� deve preencher todos os campos!";
}
?>