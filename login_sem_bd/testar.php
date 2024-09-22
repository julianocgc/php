<?php
$user= $_POST['user'];
$senha= $_POST['senha'];
$nome= "juliano";
$pass= 123456789; 

if (($user == $nome) and ($senha == $pass)) {
echo "Usuário e senha corretos!";
}else{
echo "Seu usuário e sua senha não estão corretos!"; 
}
?>











