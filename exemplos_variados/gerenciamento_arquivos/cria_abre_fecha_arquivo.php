<?php
//Criaremos um novo arquivo, escreveremos conteúdo e por fim o fecharemos
echo file_put_contents("perfil.txt", "Nome: Juliano Guimarães \n Profissão: Técnico em Informática \n Cidade: Poços de Caldas \n", FILE_APPEND);
?> 