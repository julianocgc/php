<?php
// cookie (nome, valor, tempo)
// para criar use o + e para remover use o -
setcookie('user', 'Juliano Guimarães', time()+3600);
setcookie('email', 'julianocgc@hotmail.com', time()+3600);
setcookie('ultima_pesquisa', 'tenis adidas', time()+3600);

// var_dump($_COOKIE);

echo $_COOKIE['user'];
?>