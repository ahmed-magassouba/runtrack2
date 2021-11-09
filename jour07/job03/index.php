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
    var_dump($_GET);

    session_start();

    if (isset($_GET['prenom']) == true) {
        $_SESSION['prenom']=$_GET['prenom'];
       
   }else{

    //    if (isset($_SESSION['nbvisites']) == true) {

    //        $_SESSION['nbvisites']++;

    //    } else {
    //        $_SESSION['nbvisites'] = 0;
    //    }
   
      
       echo "saisissé votre prenom";
   }

   echo '<b><i>'."Votre prénom dans la session est : " . $_SESSION['prenom'].'</b></i>';


    

    ?>
    <form action="./index.php" method="get">
    <br>
        <label for="prenom">Prenom:</label>
        <input type="text" id="prenom" name="prenom" placeholder="Entrer votre prénom"><br><br>

        <input type="submit" value="Envoyer">
        <input type="submit" value="reset" name="reset">

    </form>
</body>

</html>