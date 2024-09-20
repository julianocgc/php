<?php
// Sessões servem para armazenar informações que serão utilizadas em várias páginas
// deve-se colocar em todas as páginas que usarão sessões
// sessões são finalizadas quando o navegador é fechado

session_start(); // iniciar sessão

$_SESSION['cor'] = "Verde"; // criar sessão
$_SESSION['carro'] = "Veloster"; // criar sessão

echo $_SESSION['cor']."<br>".$_SESSION['carro']."<br>".session_id(); // exibir sessão e o id da sessão
?>