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
           //une première boucle qui itère 2 a 1000

    for ($i = 2; $i <= 1000; $i++) {
           //je declare un booléen 
        $verif = true;

           /* une boucle pour itéter sur les nombres sans depassé 
             le contenu de la variable $i */
     
        for ($x = 2; $x <= $i; $x++) {
           /* si le reste de la division du contenu de la variable $i et $x
             est egal a 0 et que le contenu de la variable $x est different du
             contenu de la variable $i alors le nombre n'est pas premier*/
            if ($i % $x == 0  and  $x != $i) {
                $verif = false;
            }
        }
            // dans le cas ou ma verification serais vrais donc true
            //alors le contenu de la variable est un nombre premier

        if ($verif == true) {
            echo $i . '<br>';
        }
    }


    ?>
</body>

</html>