<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>job02</title>
</head>

<body>
    <?php
    $nbr = 1337;
    $i = 0;
    while ($i <= 1337) {
        if ($i != 26 && $i != 37 && $i != 88 && $i != 1111) {
            echo $i . '<br>';
        }

        $i++;
    }
    ?>
</body>

</html>