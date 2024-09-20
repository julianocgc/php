<?php

    include "conecta_mysqli.inc";

       $resultado = mysqli_query ($conexao, "SELECT * FROM produtos");

    mysqli_close($conexao);

?>
