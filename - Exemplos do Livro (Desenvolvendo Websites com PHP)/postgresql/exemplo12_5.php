<?php

    include "conecta_pg.inc";

       $resultado = pg_query ($conexao, "SELECT * FROM produtos");

       $codigo = pg_result ($resultado , 0 , 0);
       $nome = pg_result ($resultado , 0 , "nome_produto");
       $preco = pg_result ($resultado , 0 , "preco");

    pg_close($conexao);

   echo "C�digo do produto: $codigo <br>";
   echo "Nome do produto: $nome <br>";
   echo "Pre�o do produto: $preco";

?>
