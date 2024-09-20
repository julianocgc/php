<?php

    include "conecta_mysql.inc";

       $resultado = mysql_query ("SELECT * FROM produtos");

    mysql_close($conexao);

?>
