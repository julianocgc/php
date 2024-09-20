<meta http-equiv="Content-Type" content="text/html;charset=UTF-8" /> <!-- ajuste de acordo com a sua codificação: UTF-8 ou ISO-8859-1 -->
<?php
require('../smarty/libs/Smarty.class.php');
$smarty = new Smarty;
$smarty->assign('titulo', 'Grêmio campeão do mundo.');
$smarty->display('index.tpl');
?>
