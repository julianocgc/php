<?php
// encerrando a sessão
session_start(); // iniciando a sessão
session_unset(); // limpando a sessão
session_destroy(); // destruindo a sessão
header('Location: index.php');
?>