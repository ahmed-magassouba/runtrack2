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
    function calcule($a, $operation, $b)
    {
        switch ($operation) {
            case '+':
                return $a + $b;
                break;
            case '-':
                return $a - $b;
                break;
            case '*':
                return $a * $b;
                break;
            case '/':
                return $a / $b;
                break;
            case '%':
                return $a % $b;
                break;
                default:
                return "ceci n'est pas un operateur pris en compte";
        }
    }
   
    echo calcule(2, '+', 2);

    ?>
</body>

</html>