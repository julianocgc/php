<?php
if(IsSet($_COOKIE["nome_usuario"]))
    $nome_usuario = $_COOKIE["nome_usuario"];
if(IsSet($_COOKIE["senha_usuario"]))
    $senha_usuario = $_COOKIE["senha_usuario"];

if(!(empty($nome_usuario) OR empty($senha_usuario)))
{
    include "conecta_pg.inc";
	$resultado = pg_query($conexao, "SELECT * FROM usuarios WHERE username='$nome_usuario'");
	if(pg_num_rows($resultado)==1)
	{
		if($senha_usuario != pg_result($resultado,0,"senha"))
		{
            setcookie("nome_usuario");
            setcookie("senha_usuario");
            echo "Voc� n�o efetuou o LOGIN!";
            exit;
        }
    }
    else
    {
        setcookie("nome_usuario");
        setcookie("senha_usuario");
        echo "Voc� n�o efetuou o LOGIN!";
        exit;
    }
}
else
{
    echo "Voc� n�o efetuou o LOGIN!";
    exit;
}

pg_close($conexao);
?>
