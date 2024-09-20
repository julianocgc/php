<?php
if (copy("perfil.txt", "copiaPerfil.txt")) {
echo "Cópia efetuada com sucesso.";
}
else {
echo "Erro na cópia.";
}
?>