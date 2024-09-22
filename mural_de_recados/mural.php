<script src="valida.js" type=text/javascript></script>
<form name=email2 onsubmit="return checkemail()" action=enviar_msg.php?a=confirma method=post>
<table style="width: 471px; HEIGHT: 200px" cellSpacing=0 cellPadding=0 width=471 
align=center border=0>
<tbody>
<tr>
<td width=104>
<p align=center><font face=Arial color=#000000 size=1>Nome:</font></p></td>
<td width=369><input id=nome style="border-right: #00008b 1px solid; border-top: #00008b 1px solid; font-size: 8pt; border-left: #00008b 1px solid; border-bottom: #00008b 1px solid; font-family: verdana" 
size=30 name=nome></td></tr>
<tr>
<td>
<p align=left><font color=#990099>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </font><font 
face=Arial color=#000000 size=1>E-mail:</font></p></td>
<td><input id=email style="border-right: #00008b 1px solid; border-top: #00008b 1px solid; font-size: 8pt; border-left: #00008b 1px solid; border-bottom: #00008b 1px solid; font-family: verdana" size=30 name=email> </td></tr>
<tr>
<td valign=top><font color=#990099>&nbsp; &nbsp;</font><font face=Arial color=#000000 size=1>Mensagem:</font></td>
<td><textarea id=mensagem style="border-right: #00008b 1px solid; border-top: #00008b 1px solid; font-size: 8pt; border-left: #00008b 1px solid; width: 228px; border-bottom: #00008b 1px solid; font-family: verdana; height: 134px" name=mensagem rows=10 cols=34></textarea> 
</td></tr>
<tr>
<td valign=top><input type=hidden value=ok name=send_status></td>
<td><input style="border-right: #00008b 1px solid; border-top: #00008b 1px solid; font-size: 8pt; border-left: #00008b 1px solid; width: 117px; cursor: hand; border-bottom: #00008b 1px solid; font-family: verdana; height: 18px; background-color: #ffffff" type=submit size=15 value="Enviar Mensagem" name=submit> 
<input style="border-right: #00008b 1px solid; border-top: #00008b 1px solid; font-size: 8pt; border-left: #00008b 1px solid; width: 108px; cursor: hand; border-bottom: #00008b 1px solid; font-family: verdana; height: 18px; background-color: #ffffff" type=reset value="Limpar tudo"> 
</td></tr></tbody></table>
<table cellSpacing=0 cellPadding=0 width=449 align=center border=0>
<tbody>
<tr>
<td>&nbsp;</td>
<td>&nbsp;</td></tr>
<tr>
<td><br>
<center><font color=#000000><font face=arial>Veja as mensagem abaixo:</font></center><br><?php include "mensagens.txt"; ?></font></td>
<td>&nbsp;</td></tr></tbody></table>
<div align=left><br></div></form></center>
<center>&nbsp;</center>
<center>&nbsp;</center></td><td width="150" valign="top"></body></html>














