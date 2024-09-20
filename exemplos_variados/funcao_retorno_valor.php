<?php //iniciar código PHP
function valor($parametro){ //declaração da função
    return $parametro + $parametro; //retorno da função
}

$variavel = valor(5); //declaração da variável
/*echo $variavel; //exibir variável na tela
echo '<br>'; //pular linha
echo valor(15); //chamar a função e exibir resultado*/
echo $variavel . '<br>' . valor(20); //executar as 3 linhas anteriores e uma linha só
?> <!--finalizar código PHP