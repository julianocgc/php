<?php
//inicio de conex�o
$host = "localhost"; //computador onde o servidor de banco de dados esta instalado
$user = "root"; //seu usuario para acessar o banco
$pass = ""; //senha do usuario para acessar o banco
$banco = "login"; //banco que deseja acessar

$conexao = mysql_connect($host, $user, $pass) or die ("N�o foi possivel conectar ao banco!");
$db = mysql_select_db ($banco) or die ("N�o foi possivel selecionar seu banco de dados!");
//fim de conex�o
//inicio gravar
$username = $_POST['nome']; //Campo do banco de dados
$senha = $_POST['senha']; //Campo do banco de dados

$grava = "INSERT INTO dados VALUES ('$username', '$senha')"; //Grava dados digitados

$teste = mysql_query($grava);

if ($teste) {
echo "Seus dados foram gravados com sucesso!";
}else{
echo "N�o foi possivel gravar seus dados!";
}
//fim gravar
?>

