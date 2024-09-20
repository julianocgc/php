<?php
// interfaces serve para definir um modelo a ser usado por outras classes

interface Crud {
	public function create();
	public function read();
	public function update();
	public function delete();
}

// implementando a interface Crud
// a classe Noticias é obrigada a ter os métodos de Crud
class Noticias implements Crud {
	public function create() {
		// lógica para criar uma notícia
	}

	public function read() {
		// lógica para ler uma notícia
	}

	public function update() {
		// lógica para atualizar uma notícia
	}

	public function delete() {
		// lógica para deletar uma notícia
	}
}

?>