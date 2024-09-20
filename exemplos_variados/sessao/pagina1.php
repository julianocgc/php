<?php
header('Content-Type: text/html; charset=utf-8');
session_start(); //preparar a página para trabalhar com sessões
?>
<html>
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>
<title>Aprendendo PHP</title>
</head>
<body>
<?php
$_SESSION['variavel'] = 'Poços-Net'; //criar variável que ficará armazenada na sessão
?>
Variável criada com sucesso. <a href="pagina2.php">CLIQUE AQUI PARA VISUALIZAR O RESULTADO</a> <!--link para a página 2 onde será puxada a variável-->
</body>
</html>