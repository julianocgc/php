<?php
$titulo = "Livros da Novatec Editora";

$array_livros = array(
	"Desenvolvendo Websites com PHP",
	"Proteção Jurídica de Software",
	"Virtual Private Network",
	"ASP.NET Guia do Desenvolvedor"
);

$array_autores = array(
	"Juliano Niederauer",
	"Alexandre Coutinho Ferrari",
	"Lino Sarlo da Silva",
	"Felipe Cembranelli"
);

require('../smarty/libs/Smarty.class.php');
$smarty = new Smarty;
$smarty->assign("titulo", $titulo);
$smarty->assign("livros", $array_livros);
$smarty->assign("autores", $array_autores);
$smarty->display("index.tpl");
?>
