<?php
// conexão com banco de dados
$servername = "localhost";
$username = "root";
$password = "";
$db_name = "sistemalogin";

// função que conecta com o banco de dados
$connect = mysqli_connect($servername, $username, $password, $db_name);

// verificar se existem erros
if(mysqli_connect_error()):
	echo "Falha na conexão: ".mysqli_connect_error();
endif;