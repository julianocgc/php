<?php
error_reporting(E_ERROR);  // usado para evitar exibição de avisos (Warnings) em determinadas versões do PHP
require('../smarty/libs/Smarty.class.php');
$smarty = new Smarty;
$smarty->assign('nome', 'Juliano');
$smarty->display('index.tpl');
?>
