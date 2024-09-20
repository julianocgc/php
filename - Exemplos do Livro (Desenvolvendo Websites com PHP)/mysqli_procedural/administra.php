<?php
	$operacao = $_POST["operacao"];

	include "conecta_mysqli.inc";
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
		$resultado = mysqli_query ($conexao,$sql); 
		echo "Produto incluído com sucesso!";
	}
	elseif ($operacao=="excluir")
	{
		$codigo = $_POST["codigo"];
		if(is_numeric($codigo)){
			$sql = "DELETE FROM produtos WHERE codigo_produto=$codigo";
			$resultado = mysqli_query ($conexao,$sql); 
			$linhas = mysqli_affected_rows($conexao);
			if($linhas==1)
			{ echo "Produto excluído com sucesso!"; }
			else
			{ echo "Produto não encontrado!"; }
		}
		else
			echo "Produto inválido!";
	}
	elseif ($operacao=="mostrar")
	{
		$resultado = mysqli_query ($conexao,"SELECT * FROM produtos");
		$linhas = mysqli_num_rows ($resultado);
		echo "<p><b>Lista de produtos da loja</b></p>";
		for ($i=0 ; $i<$linhas ; $i++)
		{
			$reg = mysqli_fetch_row($resultado);  
			echo "$reg[0] <br>$reg[1] <br>$reg[2] <br>$reg[3] <br>";
			echo "$reg[4] <br>$reg[5] <br>$reg[6] <br>$reg[7] <br><br>";
		}
	}
	mysqli_close($conexao);
?>
