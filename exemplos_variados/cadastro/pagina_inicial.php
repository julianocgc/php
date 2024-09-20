<?php
session_start(); //preparar a página para trabalhar com sessões
if (isset($_SESSION['sucesso'])){
	echo "<script> alert('Cadastro realizado com sucesso!')</script>";
	unset($_SESSION['sucesso']);
}
?>
<form action="cadastrar.php" method="post">
 <p>Seu nome: <input type="text" name="nome" /></p>
 <p>Usuário: <input type="text" name="usuario" /></p>
 <p>Senha: <input type="password" name="senha" /></p>
 <p><input type="submit" value="Enviar" name="enviar" /></p>
</form>