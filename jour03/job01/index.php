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

    $tab = array(200, 204, 173, 98, 171, 404, 459);

    foreach ($tab as $valeur) {
        if ($valeur % 2 == 0) {
            echo "$valeur est pair<br/>";
        } else {
            echo "$valeur est impair<br/>";
        }
    }

    ?>

</body>

</html>