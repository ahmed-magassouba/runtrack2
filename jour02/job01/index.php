<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>job01</title>
</head>

<body>
    <?php

    $nombre = 1337;

        //une boucle for qui va faire une iterration sur l'ensemble des nombres
        
    for ($i = 1; $i < $nombre; $i++) {

        //ma condition if pour le nombre 42

        if ($i == 42) {

            echo "<b><u>$i</u></b>" . '<br>';

        } else {

            echo $i . '<br>';

            }
    }
    ?>

</body>

</html>