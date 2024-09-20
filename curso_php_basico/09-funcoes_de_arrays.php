<?php
$nomes = array("Juliano", "Maria", "Vitor", "Leila");

echo is_array($nomes);
echo "<hr>";

// is_array()- verifica se é um array
if(is_array($nomes)): 
	echo "é um array";
else:
	echo "não é um array";
endif;
echo "<br>";


// in_array()- verifica se um determinado valor existe no array
echo in_array("Vitor", $nomes);  
echo "<br>";

if(in_array("Juliano", $nomes)):
	echo "Existe no array.";
else:
	echo "Não existe no array.";
endif;
echo "<br>";

// array_keys()- retorna um novo array com as chaves do array passado
$keys = array_keys($nomes);
print_r($keys);
echo "<br>";

// array_values()- retorna um novo array com os valores do array passado como parâmetro
$values = array_values($nomes);
print_r($values);
echo "<hr>";

// array_merge()- agrega o conteúdo de dois arrays
$carros = array("Camaro", "Uno", "Gol");
$motos = array("Pop100", "50CC", "CB1000");
$veiculos = array_merge($carros, $motos);
print_r($veiculos);
echo "<hr>";

// array_pop()- exclui a última posição do array
$carros = array("Camaro", "Uno", "Gol");
print_r($carros);
array_pop($carros); // echo - mostra elemento excluido
echo "<br>";
print_r($carros);
echo "<hr>";

// array_shift()- exclui a primeira posição do array
$carros = array("Camaro", "Uno", "Gol");
print_r($carros);
array_shift($carros); // echo - mostra elemento excluido
echo "<br>";
print_r($carros);
echo "<hr>";

// array_unshift()- adiciona um ou mais elementos no inicio do array
$frutas = array("Uva", "Laranja", "Maçã");
print_r($frutas);
echo "<br>";
array_unshift($frutas, "Manga", "Acerola", "Morango");
print_r($frutas);
echo "<hr>";

// array_push()- adiciona um ou mais elementos no final do array
$frutas = array("Uva", "Laranja", "Maçã");
print_r($frutas);
echo "<br>";
array_push($frutas, "Manga", "Acerola", "Morango");
print_r($frutas);
echo "<hr>";

// array_combine()- mescla dois arrays
$keys = array("Campeão", "Vice", "Terceiro");
$values = array("Vasco", "Flamengo", "Botafogo");
$times = array_combine($keys, $values);
print_r($times);
echo "<hr>";

// array_sum()- calcula a soma dos elementos de um array
$soma = array(5,6,10,8);
echo array_sum($soma);

// explode()- transforma string em array
$data = "30/02/2018";
$novaData = explode('/', $data);
print_r($novaData);
echo "<hr>";

$frase = "meu nome não é johnny";
$array = explode(" ", $frase);
print_r($array);
echo "<hr>";

// implode()- transforma array em atring
$nomes = array("Juliano", "Leila", "Vitor", "Cirilo");
$string = implode(",", $nomes);
echo $string;
?>

