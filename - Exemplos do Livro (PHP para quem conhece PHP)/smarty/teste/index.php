<?php
error_reporting(E_ERROR);  // usado para evitar exibi��o de avisos (Warnings) em determinadas vers�es do PHP
require('../smarty/libs/Smarty.class.php');
$smarty = new Smarty;
$smarty->assign('nome', 'Juliano');
$smarty->display('index.tpl');
?>
