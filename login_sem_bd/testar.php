<?php
$user= $_POST['user'];
$senha= $_POST['senha'];
$nome= "juliano";
$pass= 123456789; 

if (($user == $nome) and ($senha == $pass)) {
echo "Usu�rio e senha corretos!";
}else{
echo "Seu usu�rio e sua senha n�o est�o corretos!"; 
}
?>











