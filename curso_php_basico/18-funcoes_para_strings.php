<?php
// Funções para Strings
/*
* strtoupper- converte uma string em maiúscula
* strtolower- converte uma string em minúscula
* substr- retorna uma parte de uma string
* str_pad- complemente uma string
* str_repeat- repete uma string
* strlen- retorna o comprimento de uma string
* str_replace- substitui uma string por outra
* strpos- retorna a posição de uma palavra em um texto
 */

$nome = "juliano guimaraes";
$novoNome = strtoupper($nome);
echo $novoNome;

echo"<hr>";

$nome = "JULIANO GUIMARAES";
$novoNome = strtolower($nome);
echo $novoNome;

echo"<hr>";

$mensagem = "Olá mundo";
// (variável, comprimento)
echo substr($mensagem, 4);

echo"<hr>";

$objeto = "mouse";
// (variável, comprimento, caractere)
$novoObjeto = str_pad($objeto, 7, "*");
echo $novoObjeto;

echo"<hr>";

$string = str_repeat("Sucesso!", 5);
echo $string;

echo"<hr>";

$frase = "Olá mundo";
echo strlen($frase);

echo"<hr>";

$texto = "A seleção Argentina será campeã da copa do mundo de 2018";
$novoTexto = str_replace("Argentina", "Brasileira", $texto);
echo $novoTexto;

echo"<hr>";

// (variável, palavra)
echo strpos($texto, "copa");

?>

