<?php
 ini_set('default_charset','UTF-8');
 	class Teste
 {
            function Saudacao() {
            	echo "Oi pessoal!";
            }
 }
 $objeto = new Teste; // $objeto se torna uma instância da classe Teste
 $objeto -> Saudacao();
?>