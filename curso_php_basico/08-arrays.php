<?php
// primeira maneira de trabalhar com ARRAYS
$carros = array("BMW", "Veloster", "Hilux");
$carros[] = "Amarok"; // inserir objetos no array
$carros[10] = "Camaro"; // inserir objetos no array na posição 10
print_r($carros);
echo "<hr>";

$carros = array(1=>"BMW", 2=>"Veloster", 3=>"Hilux");
echo $carros[2];
echo "<hr>";

// segunda maneira de trabalhar com ARRAYS
$motos = array();
$motos[] = "Yamaha";
$motos[] = "Honda";
$motos[5] = "Suzuki";
print_r($motos);
echo "<hr>";

// contar arrays
echo count($motos);

// terceira maneira de trabalhar com ARRAYS
$clientes = ["Rodrigo", "Felipe", "Beatriz"];
print_r($clientes);
echo "<hr>";

// contar arrays
echo count($clientes);
echo "<hr>";

// loop com arrays
foreach($clientes as $valor){
	echo $valor."<br>";
}
echo "<hr>";

// arrays associativos
$pessoa = array("nome"=> "Juliano", "idade"=> 38, "altura"=> 1.75);
$pessoa["cidade"] = "Mogi das Cruzes";
echo $pessoa["altura"]; //mostrar indice
echo "<hr>";

foreach($pessoa as $indice => $valor){
	echo $indice.":".$valor."<br>";
}
echo "<hr>";

// arrays multidimensionais
$times = array(
		"Cariocas"=> array("Vasco", "Flamengo","Botafogo"),
		"Paulistas"=> array("Santos", "São Paulo", "Palmeira"),
		"Baianos"=> array("Bahia", "Vitória", "Itabuna")
	);
echo $times["Cariocas"][0];
?>
