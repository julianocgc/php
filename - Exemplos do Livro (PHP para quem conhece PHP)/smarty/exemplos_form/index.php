<meta http-equiv="Content-Type" content="text/html;charset=UTF-8" /> <!-- ajuste de acordo com a sua codificação: UTF-8 ou ISO-8859-1 -->
<?php
require('../smarty/libs/Smarty.class.php');
$smarty = new Smarty;
$smarty->assign('siglas', array('SP','RJ','SC','RS'));
$smarty->assign('estados', array('São Paulo','Rio de Janeiro','Santa Catarina','Rio Grande do Sul'));
$smarty->assign('inicial', 'RS');

$smarty->display('checkbox.tpl');
echo "<br><br>";
$smarty->display('menu.tpl');
echo "<br><br>";
$smarty->display('radio.tpl');
?>
