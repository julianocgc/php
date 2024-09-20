<?php
require('../smarty/libs/Smarty.class.php');
$smarty = new Smarty;
$data_nascimento = mktime (0, 0, 0, 9, 30, 1978);
$smarty->assign('data', $data_nascimento);
$smarty->display('index.tpl');
?>
