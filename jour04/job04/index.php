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

        <label for="prenom">Prenom:</label><br>
        <input type="text" id="prenom" name="prenom" placeholder="Entrer votre prénom"><br>

        <label for="nom">Nom:</label><br>
        <input type="text" id="nom" name="nom" placeholder="Entrer votre nom"><br><br>

        <label for="age">Age:</label><br>
        <input type="number" id="age" name="age" placeholder="Entrer votre age"><br><br>

        <input type="submit" value="Envoyer">

    </form>

    <?php

   // var_dump($_POST);
    $indice=array();
   
    $i=0;
    foreach($_POST as $ind=>$val){
       $indice[$i]=$ind;
       $i++;
    }
  
    
    ?>
<table>
    <thead>
    <tr>
        <th>Arguments</th>
        <th>Valeurs</th>
    </tr>
    </thead>
    <tbody>
        <tr>
            <td><?php echo $indice[0]?></td>
            <td><?php echo $_POST['prenom'] ?></td>
        </tr>
        <tr>
            <td><?php echo $indice[1]?></td>
            <td><?php echo $_POST['nom'] ?></td>
        </tr>
        <tr>
            <td><?php echo $indice[2]?></td>
            <td><?php echo $_POST['age'] ?></td>
        </tr>

    </tbody>
</table>

</body>

</html>