<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>job01</title>
</head>

<body>
    <?php
    $str = "Certaines choses changent, et d'autres ne changeront jamais.";
    for($x=0 ; isset($str[$x])==true;$x++){
  for($i=0;$i<1;$i++){
    $str[$i+1]=$str[$i];
    echo $str[$i];
  }

}


  
    

    ?>

</body>

</html>