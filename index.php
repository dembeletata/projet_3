<?php
    include("traitement.php");
?>


<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="hero">
    <?php include("header.php")?>

        <div class="image">
            <h1>BIENVENUE AU BURKINA FASO</h1>
            <h2>Terre d'acceiul et de tradition</h2>
        </div>
        <style>
        </style>
    </div>
    <div class="contenaire">

        <section class="section1">

        <div class="texte"><?php afficheTexte("h1_section1");?> </div>
                
            <div class="">
                <div>
                     <?php echo afficheImage(3); ?>
                    <h1><?php afficheTexte("CROCODILES");?></h1> 
                    <p><?php afficheTexte("croco");?></p>
                </div>
                <div> 
                    <?php echo afficheImage(4); ?>  
                    <h1><?php afficheTexte("CASCADES");?></h1> 
                    <p><?php afficheTexte("cascade");?></p>
                </div>
                <div> 
                    <?php echo afficheImage(5); ?>  
                    <h1><?php afficheTexte("RUINE");?></h1> 
                    <p><?php afficheTexte("ruine");?></p>
                </div>
            </div>
        </section>

        <section class="section2">
        <?php echo afficheImage(6); ?>  
        <div>                    
            <h1><?php afficheTexte("MASQUES");?></h1> 
            <p><?php afficheTexte("masque");?></p>

        </div>
        </section>
        <br>
        <br>
        <br>
        <br>


        <section class="section2">
        <div>                    
            <h1><?php afficheTexte("PALAIS");?></h1> 
            <p><?php afficheTexte("palais");?></p>

        </div>
        <?php echo afficheImage(7); ?>  

        </section>






<?php include("fotter.php")?>

    </div>
</body>
</html>