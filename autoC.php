<?php
class Automovil {
    public $marca;
    public $modelo;
    
    public function mostrar() {
        echo "<p>Hola! soy un $this->marca, modelo $this->modelo</p>";
    }
}

$c1 = new Automovil();
$c1->marca = "Toyota";
$c1->modelo = "Corolla";
$c1->mostrar();

$c2 = new Automovil();
$c2->marca = "Honda";
$c2->modelo = "Civic";
$c2->mostrar();