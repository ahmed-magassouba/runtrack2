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
    $str = "I'm sorry Dave I'm afraid I can't do that";
    for($i=0 ; isset($str[$i])==true;$i++){
        if($str[$i] =='a'|| $str[$i] =='e' || $str[$i] =='i' || $str[$i] =='I'|| $str[$i] =='o' || $str[$i] == 'u' || $str[$i] =='y'){
            echo $str[$i];
        }
    }
    ?>

</body>

</html>