<?php /* Smarty version 2.6.19, created on 2008-03-12 16:50:39
         compiled from index.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'config_load', 'index.tpl', 1, false),)), $this); ?>
<?php echo smarty_function_config_load(array('file' => "index.conf",'section' => 'Margens'), $this);?>

<html>
<head>
<title><?php echo $this->_config[0]['vars']['titulo']; ?>
</title>
</head>
<body bgcolor="<?php echo $this->_config[0]['vars']['corFundo']; ?>
" topmargin="<?php echo $this->_config[0]['vars']['margemSuperior']; ?>
" leftmargin="<?php echo $this->_config[0]['vars']['margemEsquerda']; ?>
">
<h1 align="center">
<font face="Arial" color="<?php echo $this->_config[0]['vars']['corTitulo']; ?>
"><?php echo $this->_config[0]['vars']['titulo']; ?>
</font>
</h1>
</body>
</html>