<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="./index.php" action="get">

        <label for="prenom">Prenom:</label><br>
        <input type="text" id="prenom" name="prenom" placeholder="Entrer votre prénom"><br>

        <label for="nom">Nom:</label><br>
        <input type="text" id="nom" name="nom" placeholder="Entrer votre nom"><br><br>

        <input type="submit" value="Envoyer">

    </form>

    <?php
   // var_dump($_GET);
    $compteur=0;
   foreach($_GET as $valeur){
     //  echo $valeur.'<br>';
      $compteur++;
   }
   echo'le nombre d\'argument GET est: '.$compteur.'<br>';

    ?>
</body>

</html>