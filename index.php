<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Link css style-->
    <link rel="stylesheet" href="css\style.css">

    <?php

    require_once("db.php");
    
    ?>
    <title>php-oop-2</title>
</head>
<body>

<ul>
    <li>
        
        <h2>Titolo: <?php  echo $product ->getTitle(); ?></h2>
        <img src="<?php echo $product -> getImg()?>" alt="immagine prodotto">
        <h2> Prezzo: <?php echo $product ->getPrice();?></h2>

    </li>

    <li>
        
        <h2>Titolo: <?php  echo $food ->getTitle(); ?></h2>
        <img src="<?php echo $food -> getImg()?>" alt="immagine prodotto">
        <h2> Prezzo: <?php echo $food ->getPrice();?></h2>
        <h2> Tipo di oggetto: <?php echo $food ->getType();?></h2>
        <h2> Per: <?php echo $food ->getTarget();?></h2>
        <h2> Data di scadenza: <?php echo $food ->getExDate();?></h2>
        <h2> Nome Azienda: <?php echo $food ->getCompName();?></h2>
        <h2> Sede Azienda: <?php echo $food ->getCompAdd();?></h2>
    </li>

    <li>
        
        <h2>Titolo: <?php  echo $toys ->getTitle(); ?></h2>
        <img src="<?php echo $toys -> getImg()?>" alt="immagine prodotto">
        <h2> Prezzo: <?php echo $toys ->getPrice();?></h2>
        <h2> Tipo di oggetto: <?php echo $toys ->getType();?></h2>
        <h2> Per: <?php echo $toys ->getTarget();?></h2>
        <h2> Nome_brand: <?php echo $toys ->getBrand();?></h2>
        <h2> Materiali: <?php echo $toys ->getMaterial();?></h2>
        <h2> Nome Azienda: <?php echo $toys ->getCompName();?></h2>
    </li>

</ul>

    
</body>
</html>