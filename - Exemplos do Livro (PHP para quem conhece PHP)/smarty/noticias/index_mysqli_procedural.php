<meta http-equiv="Content-Type" content="text/html;charset=UTF-8" /> <!-- ajuste de acordo com a sua codificação: UTF-8 ou ISO-8859-1 -->
<?php
// ------ acesso ao banco de dados ----------
$servidor = "localhost";
$usuario = "juliano";
$senha = "12345";
$banco = "test";

$con = mysqli_connect($servidor, $usuario, $senha, $banco);
    $res = mysqli_query($con, "SELECT * FROM noticias ORDER BY data_hora DESC LIMIT 3");
    $num_linhas = mysqli_num_rows($res);

    for($i=0 ; $i<$num_linhas; $i++)
    {
        $dados = mysqli_fetch_array($res);
        $array_ids[] = $dados["id"];
        $array_titulos[] = $dados["titulo"];
        $array_textos[] = $dados["texto"];
		/*
		// se tiver problemas com acentuação, substitua as duas linhas acima pelas seguintes, caso sua página tenha codificação UTF-8 e o banco de dados não (se for o oposto, use utf8_decode)
        $array_titulos[] = utf8_encode($dados["titulo"]);
        $array_textos[] = utf8_encode($dados["texto"]);
		*/
		
        $array_datas[] = $dados["data_hora"];
    }
mysqli_close($con);

// ---- define variáveis e exibe o template ----
require('../smarty/libs/Smarty.class.php');
$smarty = new Smarty;
$smarty->assign("ids", $array_ids);
$smarty->assign("titulos", $array_titulos);
$smarty->assign("textos", $array_textos);
$smarty->assign("datas", $array_datas);
$smarty->display("index.tpl");
?>