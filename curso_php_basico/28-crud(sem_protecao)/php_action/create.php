<?php
// sessão
session_start();

// conexão
require_once 'db_connect.php';

/* clear
function clear($input){
	global $connect;
	// protege código do SQL (MySQL Injection)
	$var = mysqli_escape_string($connect, $input);
	// protege código do XSS (Cross Site Scripting)
	$var = htmlspecialchars($var);
	return $var;
}
*/

if(isset($_POST['btn-cadastrar'])):
	$nome = mysqli_escape_string($connect, $_POST['nome']);
	$sobrenome = mysqli_escape_string($connect, $_POST['sobrenome']);
	$email = mysqli_escape_string($connect, $_POST['email']);
	$idade = mysqli_escape_string($connect, $_POST['idade']);

// inserir no banco de dados
	$sql = "INSERT INTO clientes (nome, sobrenome, email, idade) VALUES ('$nome', '$sobrenome', '$email', '$idade')";

	if(mysqli_query($connect, $sql)):
		$_SESSION['mensagem'] = "Cadastrado com sucesso!";
		header('Location: ../index.php'); 
	else:
		$_SESSION['mensagem'] = "Erro ao cadastrar...";
		header('Location: ../index.php'); 
	endif;
endif;
?>