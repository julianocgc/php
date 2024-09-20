<?php
require('../smarty/libs/Smarty.class.php');
$smarty = new Smarty;
$smarty->assign('dados',array(1,2,3,4,5,6,7,8,9));
$smarty->assign('atributo', 'bgcolor="#FFFF00"');
$smarty->display('index.tpl');
?>
