<?php

    include "conecta_pg.inc";

       $resultado = pg_query ($conexao, "SELECT * FROM produtos");
       $objeto = pg_fetch_object ($resultado, 0);     
       echo "Nome do produto: " . $objeto->nome_produto . "<br>";
       echo "Pre�o: " . $objeto->preco;

    pg_close($conexao);
?>
