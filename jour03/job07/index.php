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
$new_str ="";
  for($i=0;isset($str[$i])==true;$i++){
    $new_str =  $new_str.$str[$i+1];
    
  }
  
echo $new_str;

  
    

    ?>

</body>

</html>