<?php
// conexão
require_once 'db_connect.php';

// sessão banco de dados
session_start();

// verificação página restrita
if(!isset($_SESSION['logado'])):
	header('Location: index.php');
endif;

// dados
$id = $_SESSION['id_usuario'];
$sql = "SELECT * FROM usuarios WHERE id = '$id'";
$resultado = mysqli_query($connect, $sql);
$dados = mysqli_fetch_array($resultado);
mysqli_close($connect); // encerra a conexão com o banco de dados
?>

<html>
<head>
	<title>Página Restrita</title>
	<meta charset="utf-8">
</head>
<body>
<h1>Olá <?php echo $dados['nome']; ?> </h1>
<a href="logout.php">Sair</a>
</body>
</html>