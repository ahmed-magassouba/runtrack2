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
    $str = "Dans l'espace, personne ne vous entend crier";
    $compteur =0;
    for($i=0 ; isset($str[$i])==true;$i++){
        echo $i;
        $compteur++;
    }
    echo "<br> le nombre de carractère est $compteur "
    ?>

</body>

</html>