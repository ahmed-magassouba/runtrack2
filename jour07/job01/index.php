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

    session_start();

     if (isset($_GET['reset']) == true) {

        session_destroy();
        echo "0";

    }else{

        if (isset($_SESSION['nbvisites']) == true) {

            $_SESSION['nbvisites']++;

        } else {
            $_SESSION['nbvisites'] = 0;
        }
    
       
        echo $_SESSION['nbvisites'];
    }



   // var_dump($_SESSION);
    //var_dump($_GET);

    ?>

    <form action="index.php" method="get">
        <input type="submit" value="reset" name="reset">
    </form>

</body>

</html>