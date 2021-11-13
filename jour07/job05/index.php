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
            width: 400px;
            height: 400px;
            border: 20px solid black;
            text-align: center;
            background-color: black;
            border-radius: 20px;
        }

        td {

            border: 20px solid black;
        }

        .styleinput {
            width: 80px;
            height: 80px;
            border-radius: 100%;
        }
        .styleinputr {
          width: 300px;
          height: 60px;
            border-radius: 5px;
            font-size: 25px;
            font-weight: bold;
            font-family:fantasy ;
        }

        input:hover {
            background-color: green;
        }
        h3{
            background-color: white;
        }
    </style>
</head>

<body>
    <?php

    $case = 1;
    $joueur1 = 'X';
    $joueur2 = 'O';

    echo '<form action="" method="get">';
    echo ' <table>
      <thead>
    <td colspan="3"><h3> tour du joueur1</h3></td>
    </thead>';
    for ($i = 0; $i <= 2; $i++) {
        echo '<tr>';
        for ($j = 0; $j <= 2; $j++) {

            echo ' <td><input class="styleinput" type="submit" value="-" name="' . $case++ . '"></td>';
        }
        echo '</tr>';
    }
    echo'<tfoot>
    <td colspan="3"><input class="styleinputr"  type="submit" value="Renitialiser la partie" name="submit"></td>
    </tfoot>';
    echo '</table>';
    echo '</form>';

    $_GET[1]=$joueur1;


    var_dump($_GET);


    ?>
    <!-- <form action="" method="get">
    <table>
        <tr>
            <td><input type="submit" value="-" name="button"></td>
            <td><input type="submit" value="-" name="button"></td>
            <td><input type="submit" value="-" name="button"></td>
        </tr>
        <tr>
            <td><input type="submit" value="-" name="button"></td>
            <td><input type="submit" value="-" name="button"></td>
            <td><input type="submit" value="-" name="button"></td>
        </tr>
        <tr>
            <td><input type="submit" value="-" name="button"></td>
            <td><input type="submit" value="-" name="button"></td>
            <td><input type="submit" value="-" name="button"></td>
        </tr>
    </table>
</form> -->
