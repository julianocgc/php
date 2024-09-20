<?php
$titulo = "Livros da Novatec Editora";

// ------ acesso ao banco de dados ----------
$servidor = "localhost";
$usuario = "juliano";
$senha = "12345";
$banco = "test";

$con = new mysqli($servidor, $usuario, $senha, $banco);
    $res = $con->query("SELECT titulo,autor FROM livros ORDER BY titulo");
    $num_linhas = $res->num_rows;

    for($i=0 ; $i<$num_linhas; $i++)
    {
		$dados = $res->fetch_row();
        $array_livros[] = $dados[0];
        $array_autores[] = $dados[1];
    }
$con->close();

// ---- define variáveis e exibe o template ----
require('../smarty/libs/Smarty.class.php');
$smarty = new Smarty;
$smarty->assign("titulo", $titulo);
$smarty->assign("livros", $array_livros);
$smarty->assign("autores", $array_autores);
$smarty->display("index.tpl");
?>
