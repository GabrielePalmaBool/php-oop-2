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
    <?php 
        foreach ($prods as $prod){
            if($prod ->getTitle() != null){
    ?>

        <h2>Titolo: <?php  echo $prod ->getTitle(); ?></h2>
        <img src="<?php echo $prod -> getImg()?>" alt="immagine prodotto">
        <h2> Prezzo: <?php echo $prod ->getPrice();?></h2>
        <h2> Tipo di oggetto: <?php echo $prod ->getTypology();?></h2>
        <h2> Per: <?php echo $prod ->getTarget();?></h2>
        <?php if(method_exists($prod, 'getExDate')){?>
        <h2> Data di scadenza: <?php echo $prod ->getExDate();?></h2>
        <h2> Nome Azienda: <?php echo $prod ->getCompName();?></h2>
        <h2> Sede Azienda: <?php echo $prod ->getCompAdd();?></h2>
        <?php
        } else{
        ?>
        <h2> Nome_brand: <?php echo $prod ->getBrand();?></h2>
        <h2> Materiali: <?php echo $prod ->getMaterial();?></h2>
        <h2> Nome Azienda: <?php echo $prod ->getCompName();?></h2>
       

    <?php 
        }
        }
    }
    ?>
    
    </li>

   

</ul>

    
</body>
</html>