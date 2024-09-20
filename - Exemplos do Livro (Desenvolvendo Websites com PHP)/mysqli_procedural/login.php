<?php
// obtém os valores digitados
$username = $_POST["username"];
$senha = $_POST["senha"];

// acesso ao banco de dados
include "conecta_mysqli.inc";
$resultado = mysqli_query($conexao,"SELECT * FROM usuarios where username='$username'");
$linhas = mysqli_num_rows ($resultado);
if($linhas==0)  // testa se a consulta retornou algum registro
{
	echo "<html><body>";
	echo "<p align=\"center\">Usuário não encontrado!</p>";
	echo "<p align=\"center\"><a href=\"login.html\">Voltar</a></p>";
	echo "</body></html>";
}
else
{
	$linha = mysqli_fetch_array($resultado);
   	if ($senha != $linha["senha"]) // confere senha
	{
		echo "<html><body>";
		echo "<p align=\"center\">A senha está incorreta!</p>";
		echo "<p align=\"center\"><a href=\"login.html\">Voltar</a></p>";
		echo "</body></html>";
	}
	else   // usuário e senha corretos. Vamos criar os cookies
    {
        setcookie("nome_usuario", $username);
        setcookie("senha_usuario", $senha);
        // direciona para a página inicial dos usuários cadastrados
        header ("Location: pagina_inicial.php");
    }
}
mysqli_close($conexao);
?>

