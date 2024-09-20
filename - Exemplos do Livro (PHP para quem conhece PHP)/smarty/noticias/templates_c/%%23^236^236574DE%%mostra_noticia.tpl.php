<?php /* Smarty version 2.6.19, created on 2008-03-12 17:14:48
         compiled from mostra_noticia.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'date_format', 'mostra_noticia.tpl', 8, false),)), $this); ?>
<html>
<head>
<title><?php echo $this->_tpl_vars['titulo']; ?>
</title>
</head>
<body>
<p>
	<font size="5"><?php echo $this->_tpl_vars['titulo']; ?>
</font><br>
	<i><?php echo ((is_array($_tmp=$this->_tpl_vars['data'])) ? $this->_run_mod_handler('date_format', true, $_tmp, "Data: %d/%m/%Y  Hora: %H:%M") : smarty_modifier_date_format($_tmp, "Data: %d/%m/%Y  Hora: %H:%M")); ?>
</i>
</p>
<hr>
<p><?php echo $this->_tpl_vars['texto']; ?>
</p>
<p align="center"><a href="javascript:history.back()">Voltar</a></p>
</body>
</html>