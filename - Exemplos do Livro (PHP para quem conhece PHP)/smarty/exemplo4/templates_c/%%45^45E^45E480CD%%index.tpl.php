<?php /* Smarty version 2.6.19, created on 2008-03-12 16:49:47
         compiled from index.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'truncate', 'index.tpl', 1, false),)), $this); ?>
<?php echo ((is_array($_tmp=$this->_tpl_vars['descricao'])) ? $this->_run_mod_handler('truncate', true, $_tmp) : smarty_modifier_truncate($_tmp)); ?>
 <br>
<?php echo ((is_array($_tmp=$this->_tpl_vars['descricao'])) ? $this->_run_mod_handler('truncate', true, $_tmp, 30) : smarty_modifier_truncate($_tmp, 30)); ?>
 <br>
<?php echo ((is_array($_tmp=$this->_tpl_vars['descricao'])) ? $this->_run_mod_handler('truncate', true, $_tmp, 30, "") : smarty_modifier_truncate($_tmp, 30, "")); ?>
 <br>
<?php echo ((is_array($_tmp=$this->_tpl_vars['descricao'])) ? $this->_run_mod_handler('truncate', true, $_tmp, 30, "", true) : smarty_modifier_truncate($_tmp, 30, "", true)); ?>
 <br>
<?php echo ((is_array($_tmp=$this->_tpl_vars['descricao'])) ? $this->_run_mod_handler('truncate', true, $_tmp, 30, "...", true) : smarty_modifier_truncate($_tmp, 30, "...", true)); ?>
