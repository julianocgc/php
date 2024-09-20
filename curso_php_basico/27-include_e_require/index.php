<?php
/* 
include e require servem para incluir o conteúdo de um arquivo php em outro arquivo php
include - se não encontrar o arquivo, mostra erros e executa o  script
require - se não encontrar o arquivo, mostra erros e pára o script
include_once - verifica se o arquivo já foi incluido e não inclui novamente
require_once - verifica se o arquivo já foi incluido e não inclui novamente
*/
include 'header.php'; 
?>

<?php echo "Olá pessoal"; ?>

<?php
include 'footer.php'; 
?>

