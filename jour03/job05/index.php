<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>job01</title>
    <style>
        table{
            text-align: center;
            margin: auto;
            border-collapse: collapse;
            border: solid 1px black;
        }
        td,th{
            border: 1px solid black;
            width: 180px;
            height: 50px;
        }
    </style>
</head>

<body>
    <?php

    $str = "On n est pas le meilleur quand on le croit mais quand on le sait";
    $cc = 0;
    $cv = 0;
    $dic = array(
        "consonnes" => array("b", "c", "d", "f", "g", "h", "i", "j", "k", "l", "m", "n", "p", "q", "r", "s", "t", "v", "w", "x", "z"),
        "voyelles" => array('a', 'e', 'i', 'o', 'u', 'y'),
    );

    for ($i = 0; isset($str[$i]) == true; $i++) {

        for ($x = 0; isset($dic["consonnes"][$x]); $x++) {
            if ($str[$i] == $dic["consonnes"][$x]) {
                $cc++;
            }
        }

        for ($y = 0; isset($dic["voyelles"][$y]); $y++) {
            if ($str[$i] == $dic["voyelles"][$y]) {
                $cv++;
            }
        }
    }
   

    ?>

<table>
    <thead>
        <th>“Voyelles”</th>
        <th>“Consonnes”.</th>
    </thead>
    <tbody>
        <td><?php  echo "nous avons $cc consonnes <br>";?></td>
        <td><?php  echo "nous avons $cv voyelles <br>";?> </td>
    </tbody>
</table>


</body>

</html>