<?php
session_start(); // iniciar sessão
echo $_SESSION['cor']."<br>".$_SESSION['carro']."<br>".session_id(); // exibir sessão e o id da sessão
?>