<?php
// FIRST EXAMPLE - POO
// public - el atributo PUBLIC puede ser manipulaado por cualquier otra clase fuera de su clase principal
// private - solo funciona dentro de su misma clase
// protect - solamente recibe dtos de la herencia

class Cart {
    public $color;
    public $marca;
    public $modelo;

    public function arrancar() {
        // METODO
        echo "El carro esta arrancando";
    }
}

// crear un objeto de la clase Cart
$myCart = new Cart();
$myCart->color = "Arena";
$myCart->marca = "Toyota";
$myCart->modelo = "Corolla";

$myCart->arrancar();


// En este ejemplo:
// Cart es una clase.
// color, marca y modelo son propiedades.
// arrancar() es un método.
// $myCart es un objeto de la clase Cart.
?>