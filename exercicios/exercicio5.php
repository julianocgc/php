<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Exercício 5</title>
</head>

<body>

<?php
// escopo global
$nome = "Juliano Guimarães Corrêa";

function exibeNome(){
	global $nome;
	echo $nome;
}

exibeNome();

?>

</body>

</html>