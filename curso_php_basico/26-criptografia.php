<?php
// criptografia é um conjunto de regras que visa codificar uma informação, para que apenas o emissor e o receptor consigam decifrar.
$senha = "123456";

// criptografia base64 (mão dupla: é possível criptografar e descriptografar)
$novasenha = base64_encode($senha); // codificar senha
echo "base64: ".$novasenha."<br>";
echo "Sua senha é: ".base64_decode($novasenha); // descodificar senha

echo "<hr>";

// criptografia md5 (mão única: é possível criptografar, mas não é possível descriptografar)
echo "Md5: ". md5($senha);

echo"<hr>";

// criptografia sha1 (mão única: é possível criptografar, mas não é possível descriptografar)
echo "Sha1: ". sha1($senha);
?>