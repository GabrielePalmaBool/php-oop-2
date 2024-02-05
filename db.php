<?php

require_once __DIR__ ."/Products/toys.php";
require_once __DIR__ ."/Products/product.php";
require_once __DIR__ ."/Products/food.php";


//istanzio il primo oggetto (product) con questi valori
$product = new Product('Schesir','img/magime_cane1.jpg','23€');

//istanzio ilprimo oggetto (food) con questi valori
$food = new food('moska','img/magime_cane1.jpg','32€','cani','2024-07-03','street 215','primo');

//istanzio ilprimo oggetto (toys) con questi valori
$toys = new $toys('esca','img/gioco_gatto_1.jpeg','32€','EscaGatto','gatti','cotone,fibra','Escone');


?>