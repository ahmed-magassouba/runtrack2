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
    if (isset($_GET['reset']) == true) {
        unset( $_COOKIE['nbvisites']);
        echo"0";
    } else {

        if (!isset($_COOKIE) == true) {
            $i = 1;
        } else {
            $i = $_COOKIE['nbvisites'] + 1;
        }

        setcookie('nbvisites', $i);
        echo $_COOKIE['nbvisites'];
    }


    var_dump($_COOKIE);
    ?>

    <form action="index.php" method="get">
        <input type="submit" value="reset" name="reset">
    </form>

</body>

</html>