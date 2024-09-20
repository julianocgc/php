<html>
<body>

<?php
if(isset($_POST['enviar-formulario'])):
	$formatosPermitidos = array("png", "jpeg", "jpg", "gif");
	$extensao = pathinfo($_FILES['arquivo']['name'], PATHINFO_EXTENSION);

	if(in_array($extensao, $formatosPermitidos)):
		$pasta = "arquivos/"; // pasta onde os arquivos serão salvos
		$temporario = $_FILES['arquivo']['tmp_name']; // nome temporario do arquivo
		$novoNome = uniqid().".$extensao"; // novo nome do arquivo

		if(move_uploaded_file($temporario, $pasta.$novoNome)): // função que fará o upload funcionar
			$mensagem = "Upload feito com sucesso!";
		else:
			$mensagem = "Erro, não foi possível fazer o upload";
		endif;
	else:
		$mensagem = "Formato inválido";
	endif;

	echo $mensagem;
endif;
?>

<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST" enctype="multipart/form-data">
	<input type="file" name="arquivo"><br>
	<input type="submit" name="enviar-formulario" value="Enviar">
</form>

</body>
</html>