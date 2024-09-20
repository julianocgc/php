<?php
//Abriremos o arquivo "perfil.txt" em modo de leitura
$arquivo = fopen("perfil.txt", "r");
//Crio um loop para percorrer todo o arquivo até a última linha
while (!feof($arquivo)) {
//Imprimo cada linha do meu arquivo, forçando uma quebra de linha com <br />
echo fgets($arquivo)."<br />";
}
//Fecho $arquivo
fclose($arquivo);
?>