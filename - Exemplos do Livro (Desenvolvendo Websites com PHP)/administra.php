<?php
	$operacao = $_POST["operacao"];

	include "conecta_mysql.inc";
	if ($operacao=="incluir")
	{
		$codigo = $_POST["codigo"];
		$nome = $_POST["nome"];
		$descricao = $_POST["descricao"];
		$preco = $_POST["preco"];
		$peso = $_POST["peso"];
		$cc = $_POST["cc"];
		$cs = $_POST["cs"];
		$ad = $_POST["ad"];
		$sql = "INSERT INTO produtos VALUES ";
		$sql .= "('$codigo','$nome','$descricao',$preco,$peso,$cc,$cs,'$ad')";
		$resultado = $mysqli->query($sql);
		echo "Produto inclu�do com sucesso!";
	}
	elseif ($operacao=="excluir")
	{
		$codigo = $_POST["codigo"];
		if(is_numeric($codigo)){
			$sql = "DELETE FROM produtos WHERE codigo_produto=$codigo";
			$resultado = $mysqli->query($sql);
			$linhas = $mysqli->affected_rows;
			if($linhas>0)
			{ echo "Produto exclu�do com sucesso!"; }
			else
			{ echo "Produto n�o encontrado!"; }
		}
		else
			echo "Produto inv�lido!";
	}
	elseif ($operacao=="mostrar")
	{
		$resultado = $mysqli->query("SELECT * FROM produtos");
		$linhas = $resultado->num_rows;
		echo "<p><b>Lista de produtos da loja</b></p>";
		for ($i=0 ; $i<$linhas ; $i++)
		{
			$reg = $resultado->fetch_row();  
			echo "$reg[0] <br>$reg[1] <br>$reg[2] <br>$reg[3] <br>";
			echo "$reg[4] <br>$reg[5] <br>$reg[6] <br>$reg[7] <hr>";
		}
	}
	$mysqli->close();
?>