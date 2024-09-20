<?php
require_once('../cfg.php');
?>
<html>
<head>
    <meta http-equiv="content-type" content="text/html;charset=UTF-8" />
</head>
<body>
    <form action="atualizar.php" method="POST"> <!-- Inicia o formulário -->
    <table><!-- Inicia tabela -->
        <tr><!-- Inicia linha da tabela (Table Row) -->
            <td><!-- Inicia célula da tabela (Table Data) -->
                Nome:
            </td>
            <td>
                Usuário:
            </td>
            <td>
                Senha:
            </td>
        </tr>
    <?php
    $sql = "SELECT * FROM users"; // Comando SQL para consultar tudo (*) da tabela
    $query = $mysqli->query($sql); // Salvando o comando na variável para consultar a sucessão
    if($query) { // Consultando a sucessão da consulta, para exibir os resultados logo abaixo
        while($row = mysqli_fetch_assoc($query)){ // Inicia iteração para iterar desde a primeira linha do resultado até a última
    ?>
    <!-- Tudo executado daqui para baixo será repetido para cada linha retornada da consulta -->
    <tr><!-- Inicia linha da tabela (Table Row) -->
        <td><!-- Inicia célula da tabela (Table Data) -->
            <input type="text" value="<?php echo $row['nome']; ?>" name="nome[]" /><!-- Input para exibir o valor -->
        </td>
        <td>
            <input type="text" value="<?php echo $row['usuario']; ?>" name="usuario[]" />
        </td>
        <td>
            <input type="text" value="<?php echo $row['senha']; ?>" name="senha[]" />
        </td>
    </tr>
    <?php
        }
    }
    ?>
    </table>
    <button type="submit" name="atualizar"><b>ATUALIZAR</b></button><!-- Botão submit do formulário, para enviar para a página "action" e realizar a atualização dos dados -->
    </form>
</body>
</html>