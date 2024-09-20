<?php
// arquivos da pasta classes e models fazem parte deste arquivo
require 'classes/produto.php';
require 'models/produto.php';


// usar namespace
$produto = new \models\Produto();
$produto->mostrarDetalhes();

/* outra forma
use classes\Produto; // as productModel; (apelido)

$produto = new Produto();
$produto->mostrarDetalhes();
*/

echo "<br>";

use models\Produto as productModel;
use classes\Produto as productClass;

$produto1 = new productModel();
$produto1->mostrarDetalhes();

echo "<br>";

$produto2 = new productClass();
$produto2->mostrarDetalhes();



?>