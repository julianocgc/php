<html>
<body>
<?php
	...
	if (empty($nome) or empty($email) or empty($cpf))
	{
		echo "Você deve preencher os campos Nome, E-mail e CPF!";
		exit;
	}
	...
?>
</body>
</html>