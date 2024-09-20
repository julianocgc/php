<html>
<body>

	<?php
	if(isset($_POST['enviar-formulario'])):
		$formatosPermitidos = array("png", "jpeg", "jpg", "gif");
		$quantidadeArquivos = count($_FILES['arquivo']['name']);
		$contador = 0;

		while($contador < $quantidadeArquivos):
			$extensao = pathinfo($_FILES['arquivo']['name'][$contador], PATHINFO_EXTENSION);

			if(in_array($extensao, $formatosPermitidos)):
		$pasta = "arquivos/"; // pasta onde os arquivos serão salvos
		$temporario = $_FILES['arquivo']['tmp_name'][$contador]; // nome temporario do arquivo
		$novoNome = uniqid().".$extensao"; // novo nome do arquivo

		if(move_uploaded_file($temporario, $pasta.$novoNome)): // função que fará o upload funcionar
			echo = "Upload feito com sucesso para $pasta.$novoNome!<br>";
		else:
			echo = "Erro ao enviar o arquivo $temporario";
		endif;
	else:
	echo = "$extensao não é permitida<br>";
		endif;
			$contador++;
		endwhile;
	endif;
?>

<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST" enctype="multipart/form-data">
	<input type="file" name="arquivo[]" multiple><br>
	<input type="submit" name="enviar-formulario" value="Enviar">
</form>

</body>
</html>