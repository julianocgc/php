<?php // iniciar o código PHP
session_start(); //preparar página para trabalhar com sessões
require_once('../cfg.php'); //incluir e exigir o arquivo de configuração do banco de dados

if(!isset($_POST['enviar'])){ //checar se o botão ENVIAR foi clicado
	header('Location: ../login/'); //redirecionar para a página de login
	exit(); //finalizar o script desta página
}

$usuario = $_POST['usuario']; //puxar dados do formulário
$senha = $_POST['senha']; //puxar dados do formulário

$dados = $mysqli->query("SELECT id, usuario, senha FROM users WHERE usuario = '$usuario'")->fetch_array(); //fazer consulta no banco de dados

if($dados == ""){ //checar se a consulta retornou resultados
    //se não retornar resultado
	$_SESSION['usuario_desconhecido'] = true; 
	header('Location: ../login/'); //redirecionar para a página de login
	exit(); //encerrar o script desta página
}

if($senha != $dados['senha']){ // checar se a senha é a mesma do banco de dados
	//se a senha estiver incorreta
	$_SESSION['senha_incorreta'] = true; 
	header('Location: ../login/'); //redirecionar para a página de login
	exit(); //encerrar o script desta página
}

$_SESSION['user_id'] = $dados['id']; //armazenar na sessão o id do usuário logado

header('Location: ../'); //redirecionar para a página raiz
exit(); //encerrar o script desta página