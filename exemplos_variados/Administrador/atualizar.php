<?php
require_once('../cfg.php'); // Exige arquivo .cfg

$nomes = $_POST['nome']; // Puxa o array (vetor) dos inputs com name = "nome[]" para a variável $nomes
$usuarios = $_POST['usuario']; // Puxa o array (vetor) dos inputs com name = "usuario[]" para a variável $usuarios
$senhas = $_POST['senha']; // Puxa o array (vetor) dos inputs com name = "senha[]" para a variável $senhas

foreach($nomes as $key => $value) { //Inicia a iteração do vetor $nomes, trabalhando com a variável "$key" como chave de posição e "$value" como valor
    $id = $key + 1; // Determina que o ID a ser trabalhado é o valor da chave + 1 (pois arrays começam a contar do 0, e os IDs do MySQL iniciam em 1)
    $nome = $value; // Determina que o novo nome a ser inserido é o valor do vetor $nomes com posição atual de iteração
    $usuario = $usuarios[$key]; // Determina que o novo usuário a ser inserido é o valor do vetor $usuarios com posição atual da chave de iteração
    $senha = $senhas[$key]; // Determina que a nova senha a ser inserida é o valor do vetor $senhas com posição atual da chave de iteração
    mysqli_query($mysqli, "UPDATE users SET nome = '$nome', usuario = '$usuario', senha = '$senha' WHERE id = '$id'"); // Executa o código SQL no banco de dados
    // Nesse exemplo eu só executei o comando acima direto, sem checagem de sucesso... Mas é sempre bom colocar uma checagem.
 }

?>