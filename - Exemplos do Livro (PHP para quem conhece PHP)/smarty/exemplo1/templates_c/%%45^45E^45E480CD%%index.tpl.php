<?php /* Smarty version 2.6.19, created on 2008-03-12 16:48:47
         compiled from index.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'capitalize', 'index.tpl', 2, false),)), $this); ?>
<?php echo $this->_tpl_vars['titulo']; ?>
 <br>
<?php echo ((is_array($_tmp=$this->_tpl_vars['titulo'])) ? $this->_run_mod_handler('capitalize', true, $_tmp) : smarty_modifier_capitalize($_tmp)); ?>
