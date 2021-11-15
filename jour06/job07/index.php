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

    $tab = array("abc", "ghi", "def", "ok");


    function bubblesort($tab, $bool)
    {
        $taille = 0;
        $z = 0;

        while (isset($tab[$z])) {
            $z++;
        }
        $taille = $z - 1;


        $alpha = array('a', 'b', 'c', 'd', 'e', 'f', 'g', 'h', 'i', 'j', 'k', 'l', 'm', 'n', 'o', 'p', 'q', 'r', 's', 't', 'u', 'v', 'w', 'x', 'y', 'z');

        if (isset($tab) == true) {
            if ($bool) {

                for ($x = 0; isset($tab[$x]) == true; $x++) {

                    // for ($y = 0; isset($tab[$x][$y]) == true; $y++) {
                    // echo $tab[$x][$y] . '<br>';
                    for ($i = 0; isset($alpha[$i]) == true; $i++) {
                        // echo $tab[$x];
                        if ($tab[$x][0] == $alpha[$i]) {

                            echo $i . '<br>';
                        }

                        //     //comparer les indices de chaque carractère       


                        // }
                        // }
                    }
                }
            }
        }
    }

    var_dump($tab);

    bubblesort($tab, 14);


    ?>
</body>

</html>