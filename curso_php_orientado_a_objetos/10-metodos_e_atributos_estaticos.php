<?php  
// quando trabalhamos com métodos estáticos não precisamos instanciar a classe
class Login {
// criação de um atributo estático
	public static $user;
// criação de método ou função estático
	public static function verificaLogin() {
		echo "O usuário ".self::$user." está logado!";
	}
}

Login::$user = "admin";
Login::verificaLogin();

?>