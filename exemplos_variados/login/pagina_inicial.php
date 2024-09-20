<?php //iniciar o código PHP
session_start(); //preparar a página para trabalhar com sessões
if (isset($_SESSION['usuario_desconhecido'])){ //verificar se a variável foi criada
	echo "<script> alert('Este usuário não está cadastrado!')</script>"; //exibir um alerta em JAVASCRIPT
	unset($_SESSION['usuario_desconhecido']); //destruir variável criada
}
if (isset($_SESSION['senha_incorreta'])){ //verificar se a variável foi criada
	echo "<script> alert('Senha incorreta!')</script>"; //exibir mensagem para o usuário
	unset($_SESSION['senha_incorreta']); //destruir variável criada
}
if (isset($_SESSION['user_id'])){ //verificar se a variável foi criada
	echo "ESTÁ LOGADO"; //exibir mensagem para o usuário
}
?> <!--finalizar o código php-->
<form action="logar.php" method="post">
 <p>Usuário: <input type="text" name="usuario" /></p> 
 <p>Senha: <input type="password" name="senha" /></p>
 <p><input type="submit" value="Entrar" name="enviar" /></p>
</form>