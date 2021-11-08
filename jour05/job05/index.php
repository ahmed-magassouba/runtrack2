<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php

    function occurences($str, $char)
    {

        $count = 0;

        for ($i = 0; isset($str[$i]) == true; $i++) {

           if ($str[$i] == $char) {
                $count++;
            }
        }
        if ($count > 0) {
            return 'le nombre d\'occurences du carractère "' . $char . '" dans "' . $str . '" est: ' . $count;
        } else {
            return 'il n\'y a pas de carractère "' . $char . '" dans "'. $str.'"';
        }
    }

    echo occurences('Bonjour', 's');

    ?>
</body>

</html>