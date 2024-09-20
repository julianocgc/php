<?php
$senha = "123456";
$senha_db = '$2y$10$vTZy6DSKc5yiIUztN95FuOikn/GPttIIYi.O3V5GKAwgw.4DACvaK';
/* 
(senha, algoritimo,opções)
$options = [
	'cost' => 10, // quanto maior o custo, mais seguro e mais recursos de hardware será necessário
];
*/
$senhaSegura = password_hash($senha, PASSWORD_DEFAULT, $options);
echo $senhaSegura;

/*
verificar senha do banco
if(password_verify($senha, $senha_db)):
	echo "Senha válida";
else:
	echo "Senha inválida";
endif;
 */
/*
?>