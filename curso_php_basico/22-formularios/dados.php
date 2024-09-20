<?php
$nome = $_POST['nome'];
$email = $_POST['email'];

echo "Seu nome é $nome e seu e-mail é $email.<br>";

/*
$nome = $_GET['nome'];
$email = $_GET['email'];

echo "Seu nome é $nome e seu e-mail é $email.<br>";

echo $_GET['idade']."<br>".$_GET['sobrenome'];
*/
var_dump($_POST);

?>