<?php
//Abriremos um arquivo chamado "perfil.txt" no mesmo nível de pasta do arquivo "escreve.php"
$arquivo = fopen("perfil.txt", "w");
//Escrevo o conteúdo em $arquivo
fwrite($arquivo, "Nome: Fábio Souza \n Profissão: WebDesigner \n Cidade: Rio de Janeiro \n");
//Fecho $arquivo
fclose($arquivo);
?>