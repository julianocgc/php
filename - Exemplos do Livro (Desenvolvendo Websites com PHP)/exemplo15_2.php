<?php

   $de = "webmaster@algumdominio.com.br";
   $para = "alguem@dominio.com.br";
   $mensagem .= "Isto � um teste!";

    mail($para, "Teste", $mensagem, "From: $de");

?>
