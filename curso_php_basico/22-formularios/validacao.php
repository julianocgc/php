<html>
<body>

<?php
/* Validação de Dados
Esses filtros servem para ver se as informações inseridas são válidas
Funções (filter_input - filter_var)
FILTER_VALIDATE_INT
FILTER_VALIDATE_EMAIL
FILTER_VALIDATE_FLOAT
FILTER_VALIDATE_IP
FILTER_VALIDATE_URL
*/
?>

<?php

if(isset($_POST['enviar-formulario'])):
	// Array de erros
	$erros = array();
	
	// Validações
	if(!$idade = filter_input(INPUT_POST, 'idade', FILTER_VALIDATE_INT)):
		$erros[] = "Idade precisa ser um inteiro.";
	endif;

	if(!$email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL)):
		$erros[] = "E-mail inválido.";
	endif;

	if(!$peso = filter_input(INPUT_POST, 'peso', FILTER_VALIDATE_FLOAT)):
		$erros[] = "Peso precisa ser um FLOAT.";
	endif;

	if(!$ip = filter_input(INPUT_POST, 'ip', FILTER_VALIDATE_IP)):
		$erros[] = "IP inválido.";
	endif;

	if(!$url = filter_input(INPUT_POST, 'url', FILTER_VALIDATE_URL)):
		$erros[] = "URL inválida.";
	endif;

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
Idade: <input type="text" name="idade"><br>
E-mail: <input type="text" name="email"><br>
Peso: <input type="text" name="peso"><br>
IP: <input type="text" name="ip"><br>
URL: <input type="text" name="url"><br>
<button type="submit" name="enviar-formulario"> Enviar </button><br>
</form>

</body>
</html>