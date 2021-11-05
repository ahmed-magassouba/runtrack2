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
    $h=$_GET['hauteur'];
    
    for ($x = 1; $x <= $_GET['largeur']; $x++) {
        echo'<br>';
        echo'/';
        for ($i = 1; $i <$x; $i++) {
            echo '_';
        }
       
        echo'\\';
    }
   
    for ($x = 1; $x <=$h/2; $x++) {
        echo'<br>'.'|';  
    }


    for ($i = 1; $i< $_GET['largeur']; $i++) {
       echo '_';
    }

    ?>


</body>

</html>