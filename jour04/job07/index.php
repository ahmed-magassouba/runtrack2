<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body {
            text-align: center;
        }
    </style>
</head>

<body>
    <form action="./index.php" method="get">

        <label for="largeur">largeur</label><br>
        <input type="text" id="largeur" name="largeur" placeholder="saisissez un nombre"><br><br>

        <label for="hauteur">hauteur</label><br>
        <input type="text" id="hauteur" name="hauteur" placeholder="saisissez un nombre"><br><br>

        <input type="submit" value="Soumettre">

    </form>


    <?php
    // je reccupère la hauteur et la largeur 
    //ensuite je les stock dans les variable $l et $h
    $l = $_GET['largeur'];
    $h= $_GET['hauteur'];

  //une boucle  pour la hauteur pour afficher un"/" a chaque hauteur
    for ($x = 1; $x <= $h ; $x++) {
        echo '<br>';
        echo '/';
  //boucle pour afficher le carractère "_" a la suite par rapport a la valeur de x
  //pour x=1 on aura _ pour x=2 on aura __ ainsi de suite   
        for ($i = 1; $i < $x; $i++) {
            echo '_';
        }
 // on affiche le carractère \ ala fin de charractère "_"
 // on utilise le double \\ pour evité les problème d'echap
        echo '\\';
    }
//pour le bas de ma maison 
//j'affiche le carractète |  au nomre de la moitié de la valeur de la largeur
//et je diminu de 1
    for ($x = 1; $x < $l / 2; $x++) {
        echo '<br>' . '|';
 //une boucle pour creer de l'espace en quantité egal a la hauteur
        for ($y = 0; $y <= $h; $y++) {
            echo '&nbsp';
        }
 //j'affiche de nouveau le carractère | a la fin de l'espace créer
        echo  '|';
    }

    echo "<br>";

    echo  '|';
// boucle pour le bas de la maison
    for ($i = 1; $i < $h ; $i++) {
        echo '_';
    }


    echo  '|';


    ?>


</body>

</html>