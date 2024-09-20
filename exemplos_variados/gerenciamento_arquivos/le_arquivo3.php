<?php
$perfil = file("perfil.txt");
$tamPerfil = count($perfil);
for ($i = 0; $i < $tamPerfil; $i++) {
echo "Linha ".$i." - ".$perfil[$i]."<br />";
}
?>