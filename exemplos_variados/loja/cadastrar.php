<?php //iniciar o código PHP
session_start(); //preparar a página para trabalhar com sessão
require_once('../cfg.php'); //incluir arquivo das configurações do banco de dados

if(!isset($_POST['enviar'])){ //verificar se o botão ENVIAR foi clicado
	header('Location: ../cadastro/'); //redirecionar para a página do cadastro
	exit(); //finalizar execução do script nesta página
}

$nome = $_POST['nome']; //puxar dados inseridos no formulário
$endereco = $_POST['endereco']; //puxar dados inseridos no formulário
$cidade = $_POST['cidade']; //puxar dados inseridos no formulário
$usuario = $_POST['usuario']; //puxar dados inseridos no formulário
$senha = $_POST['senha']; //puxar dados inseridos no formulário

$sql = "INSERT INTO clientes (nome, endereco, cidade, usuario, senha) VALUES ('$nome', '$endereco', '$cidade', '$usuario', '$senha')"; //código a ser executado no SQL para realizar registro

$realizar_cadastro = $mysqli->query($sql); //executar código SQL acima

if($realizar_cadastro){ //confirmar se o comando foi executado com sucesso
	$_SESSION['sucesso'] = true; //armazena em uma variável de sessão, indicando que foi executado com sucesso
}
else {
    $_SESSION['erro'] = true; //armazena em uma variável de sessão, indicando que houve um erro
}
header('Location: formulario.php'); //redirecionar para a página do cadastro
exit(); //interromper a execução do script nesta página