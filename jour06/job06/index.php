<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php
    var_dump($_GET);

    if (isset($_GET['style']) == true) {
        // if($_GET['style']=='style1')
        //     echo '<link href="style1.css" rel="stylesheet">'; 

        switch ($_GET['style']) {
            case 'style1':
                echo '<link href="style1.css" rel="stylesheet">';
                break;
            case 'style2':
                echo ' <link href="style2.css" rel="stylesheet">';
                break;
            case 'style3':
                echo ' <link href="style3.css" rel="stylesheet">';
                break;
            default:

                break;
        }
    }


    ?>


</head>

<body>

    <fieldset>
        <form method="get" action="index.php">
            <fieldset>
                <legend>Formulaire de style</legend>
                <p>
                    <select name="style" id="style">
                        <option value="default">style par defaut</option>
                        <option value="style1">style1</option>
                        <option value="style2">style2</option>
                        <option value="style3">style3</option>

                    </select>


                    <br /> <br />
                    <input type="Submit" value="Submit" />

                </p>
            </fieldset>
    </fieldset>
    </form>

</body>

</html>