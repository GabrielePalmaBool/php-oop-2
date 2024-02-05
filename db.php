<?php

require_once __DIR__ ."/Products/product.php";
require_once __DIR__ ."/Products/food.php";
require_once __DIR__ ."/Products/toys.php";


//istanzio il primo oggetto (product) con questi valori
$product = new product('Schesir','img/magime_cane1.jpg','23€');

//istanzio il primo oggetto (food) con questi valori
$food = new food('moska','img/magime_cane1.jpg','32€','cani','2024-07-03','street 215','primo');

//istanzio il primo oggetto (toys) con questi valori
$toys = new toys('esca','img/gioco_gatto_1.jpeg','50€','EscaGatto','gatti','cotone,fibra','Escone');


?>