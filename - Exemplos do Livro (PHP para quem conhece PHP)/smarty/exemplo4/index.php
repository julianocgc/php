<meta http-equiv="Content-Type" content="text/html;charset=UTF-8" /> <!-- ajuste de acordo com a sua codificação: UTF-8 ou ISO-8859-1 -->
<?php
require('../smarty/libs/Smarty.class.php');
$smarty = new Smarty;
$smarty->assign('descricao', 'O PostgreSQL é um Sistema Gerenciador de Bancos de Dados relacional e orientado a objetos. Oferece mecanismos eficientes de segurança e integridade de dados.');
$smarty->display('index.tpl');
?>