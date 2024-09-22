<?php
//inicio de conexão
$host = "localhost"; //computador onde o servidor de banco de dados esta instalado
$user = "root"; //seu usuario para acessar o banco
$pass = ""; //senha do usuario para acessar o banco
$banco = "loja"; //banco que deseja acessar

$conexao = mysql_connect($host, $user, $pass) or die ("Não foi possivel conectar ao banco!");
$db = mysql_select_db ($banco) or die ("Não foi possivel selecionar seu banco de dados!");
//fim de conexão
//inicio gravar
$nome = $_POST['nome']; //Campo do banco de dados
$sexo = $_POST['sexo']; //Campo do banco de dados
$idade = $_POST['idade']; //Campo do banco de dados
$email = $_POST['email']; //Campo do banco de dados
$cidade = $_POST['cidade']; //Campo do banco de dados
$estado = $_POST['estado']; //Campo do banco de dados
$comentarios = $_POST['comentarios']; //Campo do banco de dados

$grava = "INSERT INTO usuarios VALUES ('$nome',  '$sexo', '$idade', '$email', '$cidade', '$estado', '$comentarios')"; //Grava dados digitados

$teste = mysql_query($grava);

if ($teste) {
echo "Seus dados foram gravados com sucesso!";
}else{
echo "Não foi possivel gravar seus dados!";
}
//mostra dados cadastrados
echo "<br><br>";
echo "Nome: $nome<br>";
echo "Sexo: $sexo<br>";
echo "Idade: $idade<br>";
echo "Email: $email<br>";
echo "Cidade: $cidade<br>";
echo "Comentários: $comentarios<br>";
//fim gravar
?>
