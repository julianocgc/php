<meta http-equiv="Content-Type" content="text/html;charset=UTF-8" /> <!-- ajuste de acordo com a sua codificação: UTF-8 ou ISO-8859-1 -->
<?php
require('../smarty/libs/Smarty.class.php');
$smarty = new Smarty;
$smarty->assign('texto', 'O Grêmio é campeão do mundo. Além disso, o Grêmio é bicampeão da Libertadores.');
$smarty->display('index.tpl');
?>
