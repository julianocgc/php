<?php
if (rename("copiaPerfil.txt", "perfilParaApagar.txt")) {
echo "Renomeamos o arquivo com sucesso.";
}
else {
echo "Não conseguimos renomear o arquivo.";
}
?>