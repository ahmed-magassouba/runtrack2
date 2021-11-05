<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="./index.php" method="post">

        <label for="username">username:</label><br>
        <input type="text" id="username" name="username" placeholder="nom d'utilisateur"><br>

        <label for="password">password:</label><br>
        <input type="password" id="password" name="password" placeholder="mot de passe"><br><br>

        <input type="submit" value="Connexion">

    </form>

    <?php

   // var_dump($_POST);
    if($_POST['username']=='Jhon' && $_POST['password']=='Rambo' ){
        echo"<h1>C’est pas ma guerre</h1>";
    }else{
        echo"<h1>Votre pire cauchemar</h1>";
    }
    
    ?>


</body>

</html>