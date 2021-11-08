<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <form method="get" action="index.php">
        <p>
            <label for="str">str:</label>
            <input type="text" name="str" id="str" />

            <select name="fonction" id="fonction">
                <option value=""></option>
                <option value="gras">gras</option>
                <option value="cesar">cesar</option>
                <option value="plateforme">plateforme</option>
            </select>


            <br /> <br />
            <input type="Submit" value="Submit" />

        </p>
    </form>


    <?php

    function gras()
    {
        $tab = array('A', 'B', 'C', 'D', 'E', 'F', 'G', 'H', 'I', 'J', 'K', 'L', 'M', 'N', 'O', 'P', 'Q', 'R', 'S', 'T', 'U', 'V', 'W', 'X', 'Y', 'Z');
        $space = ' ';
        if ($_GET['fonction'] == 'gras') {

            for ($i = 0; isset($_GET['str'][$i]) == true; $i++) {

                for ($x = 0; $x < 26; $x++) {

                    if ($tab[$x] == $_GET['str'][$i]) {

                        return '<b><i>' . $_GET['str'] . '</i></b>';
                    } elseif ($_GET['str'][$i] == $space) {
                        return  $_GET['str'];
                    }
                }
            }
        }
    }


    echo gras();

    function cesar($var)
    {
        $tab = array('a', 'b', 'c', 'd', 'e', 'f', 'g', 'h', 'i', 'j', 'k', 'l', 'm', 'n', 'o', 'p', 'q', 'r', 's', 't', 'u', 'v', 'w', 'x', 'y', 'z');
       $newstr ='';
        if ($_GET['fonction'] == 'cesar') {

            for ($i = 0; isset($_GET['str'][$i]) == true; $i++) {

                for ($x= 0; $x <= 25; $x++) {

                    if( $_GET['str'][$i] == $tab[$x] ){

                       $newstr =$newstr .$tab[$x+$var];
                        
                    }
                }
            }
        }
        return $newstr;
    }
echo cesar(2);

function plateforme(){
    

}

    var_dump($_GET);

    ?>


</body>

</html>