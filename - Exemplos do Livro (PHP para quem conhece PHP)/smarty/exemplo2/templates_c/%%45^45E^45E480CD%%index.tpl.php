<?php /* Smarty version 2.6.19, created on 2008-03-12 16:49:02
         compiled from index.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'count_characters', 'index.tpl', 2, false),array('modifier', 'count_sentences', 'index.tpl', 3, false),array('modifier', 'count_words', 'index.tpl', 4, false),)), $this); ?>
<?php echo $this->_tpl_vars['texto']; ?>
 <br>
Esse texto possui <?php echo ((is_array($_tmp=$this->_tpl_vars['texto'])) ? $this->_run_mod_handler('count_characters', true, $_tmp) : smarty_modifier_count_characters($_tmp)); ?>
 caracteres. <br>
Esse texto possui <?php echo ((is_array($_tmp=$this->_tpl_vars['texto'])) ? $this->_run_mod_handler('count_sentences', true, $_tmp) : smarty_modifier_count_sentences($_tmp)); ?>
 frases. <br>
Esse texto possui <?php echo ((is_array($_tmp=$this->_tpl_vars['texto'])) ? $this->_run_mod_handler('count_words', true, $_tmp) : smarty_modifier_count_words($_tmp)); ?>
 palavras.