<?php
$titulo = "Livros da Novatec Editora";

// ------ acesso ao banco de dados ----------
$servidor = "localhost";
$usuario = "juliano";
$senha = "12345";
$banco = "test";

$con = mysqli_connect($servidor, $usuario, $senha, $banco);
    $res = mysqli_query($con, "SELECT titulo,autor FROM livros ORDER BY titulo");
    $num_linhas = mysqli_num_rows($res);

    for($i=0 ; $i<$num_linhas; $i++)
    {
        $dados = mysqli_fetch_row($res);
        $array_livros[] = $dados[0];
        $array_autores[] = $dados[1];
    }
mysqli_close($con);

// ---- define variáveis e exibe o template ----
require('../smarty/libs/Smarty.class.php');
$smarty = new Smarty;
$smarty->assign("titulo", $titulo);
$smarty->assign("livros", $array_livros);
$smarty->assign("autores", $array_autores);
$smarty->display("index.tpl");
?>
