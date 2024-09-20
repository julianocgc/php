<?php //iniciar o código PHP
header('Content-Type: text/html; charset=utf-8'); //configurar idioma
session_start(); //preparar a página para trabalhar com sessões
?> <!--finalizar o código php-->
<html>
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>
<title>Aprendendo PHP</title>
</head>
<body>
<?php //iniciar o código PHP
echo $_SESSION['variavel']; // exibir variável criada na página 1
?> <!--finalizar o código php-->
</body>
</html>