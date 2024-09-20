<?php //iniciar o código PHP
session_start(); //preparar a página para trabalhar com sessões
if (isset($_SESSION['sucesso'])){ //checando se a variável sucesso foi criada
	echo "<script> alert('Cadastro realizado com sucesso!')</script>"; //mensagem JAVASCRIPT
	unset($_SESSION['sucesso']); //destruindo a variável
} else if (isset($_SESSION['erro'])){ //se a variável anterior, não foi criada, checa se a variável erro foi criada
    echo "<script> alert('Ocorreu um erro...')</script>"; //mensagem JAVASCRIPT
    unset($_SESSION['erro']); //destruindo a variável
}
?> <!--finalizar o código PHP-->
<form action="cadastrar.php" method="post"> <!--iniciar o formulário e direcionar a ação para a página cadastrar.php usando o método POST-->
 <p>Nome: <input type="text" name="nome" /></p> <!--criar um campo de texto-->
 <p>Endereço: <input type="text" name="endereco" /></p> <!--criar um campo de texto-->
 <p>Cidade: <input type="text" name="cidade" /></p> <!--criar um campo de texto-->
 <p>Usuário: <input type="text" name="usuario" /></p> <!--criar um campo de texto-->
 <p>Senha: <input type="password" name="senha" /></p> <!--criar um campo de texto-->
 <p><input type="submit" value="Enviar" name="enviar" /></p> <!--criar o botão SUBMIT-->
</form> <!--finalizar o formulário-->