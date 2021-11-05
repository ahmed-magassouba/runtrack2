<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="./index.php" method="get">

        <label for="nombre">nombre:</label><br>
        <input type="text" id="nombre" name="nombre" placeholder="saisissez un nombre"><br><br>

        <input type="submit" value="Tester le nombre">

    </form>

    <?php
    if ($_GET['nombre'] % 2 == 0) {
        echo '<h1>'.$_GET['nombre'] . '  est un nombre pair'.'</h1>';
    } else {
        echo '<h1>'. $_GET['nombre'] . '  est un nombre impair'.'<h1>';
    }

    ?>


</body>

</html>