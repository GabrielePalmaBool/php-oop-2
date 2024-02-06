<?php

require_once __DIR__ ."/Products/product.php";
require_once __DIR__ ."/Products/food.php";
require_once __DIR__ ."/Products/toys.php";

try {

    //istanzio il primo oggetto (food) con questi valori
    $prod_food = new food('moska','img/magime_cane1.jpg','32€','cani','2024-07-03','street 215','primo');

    //istanzio il primo oggetto (toys) con questi valori
    $prod_toys = new toys('esca','img/gioco_gatto_1.jpeg','50€','Escone','gatti','cotone,fibra','KKZ');


}catch(Exception $e){
    echo "Error: " . $e->getMessage();
}


//creo il mio array di oggetti
$prods = [ $prod_food , $prod_toys];

?>