<?php
// conexão com banco de dados
$servername = "localhost";
$username = "root";
$password = "";
$db_name = "crud";

$connect = mysqli_connect($servername, $username, $password, $db_name);
mysqli_set_charset($connect, "utf8"); // configura acentuação no banco de dados

if(mysqli_connect_error()):
	echo "Erro na conexão: ".mysqli_connect_error();
endif;

?>