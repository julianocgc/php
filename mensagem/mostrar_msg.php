<?php

$campo1 = $_POST['nome'];
$campo2 = $_POST['email'];
$campo3 = $_POST['msg'];

if ($campo1 == ""){
echo "Por favor Informe seu Nome!";
}elseif($campo2 == ""){
echo "Por Favor Informe seu Email!";
}elseif($campo3 == ""){
echo"Por Favor Informe sua Mensagem!";
}
?>

<form name="formulario" method="post" action="">
<h3><em>Mensagens Recebidas:</em></h3>
<p>&nbsp;</p>
<table width="34%" border="0">
<tr>
<td colspan="2" bgcolor="#FFFFCC"><label><?php echo "<i> $campo3"; ?>
</label></td>
</tr>
<tr>
<td width="49%"><em>Nome:</em><?php echo "<font color='red'> $campo1"; ?>
</label></td>
<td width="51%" align="right"><label><em>Email:</em><?php echo "<font color='red'> $campo2"; ?></label></td>
</tr>
</table>
</form>