<?php /* Smarty version 2.6.19, created on 2008-03-12 17:13:28
         compiled from index.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'date_format', 'index.tpl', 10, false),array('modifier', 'truncate', 'index.tpl', 19, false),)), $this); ?>
<html>
<body>
<div align="center">
<table border="0" cellspacing="0" width="60%">
	<tr>
		<td width="50%" bgcolor="#E8E8E8">
			<font size="5">Confira as últimas notícias!</font>
		</td>
		<td width="50%" bgcolor="#E8E8E8">
			<p align="right"><b><?php echo ((is_array($_tmp=time())) ? $this->_run_mod_handler('date_format', true, $_tmp, "%d/%m/%Y") : smarty_modifier_date_format($_tmp, "%d/%m/%Y")); ?>
</b>
		</td>
	</tr>

	<tr>
		<td width="100%" colspan="2" bgcolor="#FBFBFB"><br>

		<?php unset($this->_sections['i']);
$this->_sections['i']['name'] = 'i';
$this->_sections['i']['loop'] = is_array($_loop=$this->_tpl_vars['titulos']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['i']['show'] = true;
$this->_sections['i']['max'] = $this->_sections['i']['loop'];
$this->_sections['i']['step'] = 1;
$this->_sections['i']['start'] = $this->_sections['i']['step'] > 0 ? 0 : $this->_sections['i']['loop']-1;
if ($this->_sections['i']['show']) {
    $this->_sections['i']['total'] = $this->_sections['i']['loop'];
    if ($this->_sections['i']['total'] == 0)
        $this->_sections['i']['show'] = false;
} else
    $this->_sections['i']['total'] = 0;
if ($this->_sections['i']['show']):

            for ($this->_sections['i']['index'] = $this->_sections['i']['start'], $this->_sections['i']['iteration'] = 1;
                 $this->_sections['i']['iteration'] <= $this->_sections['i']['total'];
                 $this->_sections['i']['index'] += $this->_sections['i']['step'], $this->_sections['i']['iteration']++):
$this->_sections['i']['rownum'] = $this->_sections['i']['iteration'];
$this->_sections['i']['index_prev'] = $this->_sections['i']['index'] - $this->_sections['i']['step'];
$this->_sections['i']['index_next'] = $this->_sections['i']['index'] + $this->_sections['i']['step'];
$this->_sections['i']['first']      = ($this->_sections['i']['iteration'] == 1);
$this->_sections['i']['last']       = ($this->_sections['i']['iteration'] == $this->_sections['i']['total']);
?>
	      <p><b><u><?php echo $this->_tpl_vars['titulos'][$this->_sections['i']['index']]; ?>
</u></b> <i>(<?php echo ((is_array($_tmp=$this->_tpl_vars['datas'][$this->_sections['i']['index']])) ? $this->_run_mod_handler('date_format', true, $_tmp, "%d/%m/%Y %H:%M") : smarty_modifier_date_format($_tmp, "%d/%m/%Y %H:%M")); ?>
)</i><br>
	      <?php echo ((is_array($_tmp=$this->_tpl_vars['textos'][$this->_sections['i']['index']])) ? $this->_run_mod_handler('truncate', true, $_tmp, 150) : smarty_modifier_truncate($_tmp, 150)); ?>

	      [<a href="mostra_noticia.php?id=<?php echo $this->_tpl_vars['ids'][$this->_sections['i']['index']]; ?>
">Leia mais</a>]</p>
		<?php endfor; endif; ?>

		</td>
	</tr>
</table>
</div>
</body>
</html>