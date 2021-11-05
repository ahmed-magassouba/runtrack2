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
    if (isset($_GET['largeur']) && isset($_GET['hauteur'])) {



        // je reccupère la hauteur et la largeur 
        //ensuite je les stock dans les variable $l et $h
        $l = $_GET['largeur'];
        $h = $_GET['hauteur'];
        if (($l == 10 && $h == 5) || ($l == 20 && $h == 10)) {
            //une boucle  pour la hauteur pour afficher un"/" a chaque hauteur
            for ($x = 1; $x <= $h; $x++) {
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
                for ($y = 0; $y <= $h+2; $y++) {
                    echo '&nbsp';
                }
                //j'affiche de nouveau le carractère | a la fin de l'espace créer
                echo  '|';
            }

            echo "<br>";

            echo  '|';
            // boucle pour le bas de la maison
            for ($i = 1; $i < $h; $i++) {
                echo '_';
            }


            echo  '|';
        }else{
            echo"vous étés restreint a des mesures suivante largeur:10 et hauteur:5 <br>";
            echo"ou largeur:20 et hauteur:10";
        }
    }
    ?>


</body>

</html>