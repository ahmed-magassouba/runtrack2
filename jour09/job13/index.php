<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        table {
            margin: auto;
            width: 80%;
            border-collapse: collapse;
            border: 1px solid black;
            text-align: center;
        }

        th,
        td {
            border: 1px solid black;
            height: 50px;
        }
    </style>
</head>

<body>
    <?php


    $bdd = mysqli_connect('localhost', 'root', '', 'jour08');

    mysqli_set_charset($bdd, 'UTF8');

    $requete = mysqli_query($bdd, 'SELECT etage.nom , salles.nom  FROM `salles` INNER JOIN `etage` ON etage.id = salles.id_etage');

    $salles = mysqli_fetch_all($requete);
  
   // var_dump($salles);
   

    echo "<table><thead>
    <th>salles</th>
    <th>etage</th>
   
</thead>
<tbody>";
    foreach ($salles as $eta ) {
        echo " <tr>
            <td>" . $eta[0] . "</td>
           <td>" . $eta[1] . "</td>
            
        </tr>";
    }

    echo "</tbody>
</table>";




    ?>

</body>

</html>