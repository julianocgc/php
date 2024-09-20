<html>
<body>

<?php
/* Sanitização
Esses filtros servem para limpar caracteres inválidos das variáveis
Funções (filter_input - filter_var)
FILTER_SANITIZE_SPECIAL_CHARS
FILTER_SANITIZE_INT
FILTER_SANITIZE_EMAIL
FILTER_SANITIZE_URL
*/
?>

<?php

if(isset($_POST['enviar-formulario'])):
	// Array de erros
	$erros = array();
	
	// Sanitize
	$nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_SPECIAL_CHARS);
	echo $nome."<br>";

	$idade = filter_input(INPUT_POST, 'idade', FILTER_SANITIZE_NUMBER_INT);
	echo $idade."<br>";

	$email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
	echo $email."<br>";

	$url = filter_input(INPUT_POST, 'url', FILTER_SANITIZE_URL);
	echo $url."<br>";

	// Exibindo mensagens
	if(!empty($erros)):
		foreach($erros as $erro):
			echo "<li> $erro </li>";
		endforeach;
	else:
		echo "Parabéns, seus dados estão corretos!";
	endif;

endif;

?>

<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
Nome: <input type="text" name="nome"><br>
Idade: <input type="text" name="idade"><br>
E-mail: <input type="text" name="email"><br>
URL: <input type="text" name="url"><br>
<button type="submit" name="enviar-formulario"> Enviar </button><br>
</form>

</body>
</html>