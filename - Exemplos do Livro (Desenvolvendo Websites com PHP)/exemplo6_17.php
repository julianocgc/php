<?php
class Classe {
    function __construct() {
        print "Este � o contrutor da Classe<br>";
    }
}
class SubClasse extends Classe {
    function __construct() {
        parent::__construct();
        print "Este � o contrutor da SubClasse<br>";
    }
}
$obj = new Classe();
$obj = new SubClasse();
?>