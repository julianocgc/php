<?php
if (unlink("perfil.txt")) {
echo "Excluímos o arquivo com sucesso.";
}
else {
echo "Não conseguimos excluir o arquivo.";
}
?> 