<!DOCTYPE html>
<html lang="en">

<head>
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Le tableau</title>
</head>

<body>

     <?php
     //creation et affectation de valeur a mes variables
     $int = 10;
     $str = 'Hello World';
     $float = 3.5;
     $bool = true;

     ?>

     <table>
          <caption>le tableau des variables</caption>
          <thead>
               <tr>
                    <th>Type</th>
                    <th>Nom</th>
                    <th>Valeur</th>
               </tr>
          </thead>
          <tbody>
                <tr>
                    <td><?php echo gettype($int); ?> </td>
                    <td>$int</td>
                    <td> <?php echo $int ?> </td>
               </tr>
               <tr>
                    <td><?php echo gettype($str); ?></td>
                    <td>$str</td>
                    <td> <?php echo $str ;?> </td>
               </tr>


               <tr>
                    <td><?php echo gettype($float); ?></td>
                    <td>$float</td>
                    <td> <?php echo $float; ?> </td>
               </tr>
               <tr>
                    <td><?php echo gettype($bool); ?></td>
                    <td>$bool</td>
                    <td><?php echo $bool; ?> </td>
               </tr>
          </tbody>
     </table>
     <?php


     ?>
</body>

</html>