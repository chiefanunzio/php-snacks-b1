<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<style>
    body {
        background-color: blue;
        text-align:center;
    }

    .box {
        font-size:30px;
        border:1px solid blue;
        background-color: #ccc;
    }

    .res {
        ;
        height: 20px;
        background-color: green;

    }

    h1{
        background-color: purple;
        padding: 10px;
        border-radius:5px;
        width:30%;
        margin:20px auto;
    }

    .error{
        color:red;
    }

    .valid{
        color:green;
    }

</style>

<body>

    <?php
            $torneo = [
                'giornata-1' => [
                    [
                        'casa' => 'milano',
                        'ospite' => 'cantu',
                        'punteggio-casa' => 55,
                        'punteggio-ospite'=> 60
                    ],
                    [
                        'casa' => 'taranto',
                        'ospite' => 'catania',
                        'punteggio-casa' => 70,
                        'punteggio-ospite'=> 74
                    ],
                    [
                        'casa' => 'roma',
                        'ospite' => 'torino',
                        'punteggio-casa' => 80,
                        'punteggio-ospite'=> 54
                        ]
                ],
            ];
                    
            $giornata1 = $torneo['giornata-1'];
            
            for ($i=0;$i<count($giornata1);$i++) {
                $res1 = $giornata1[$i];
                echo '<div class="box">' 
                    . $res1['casa'] . ' - ' 
                    . $res1['ospite'] . ' - | ' 
                    . $res1['punteggio-casa'] . ' - '
                    . $res1['punteggio-ospite']
                    .'</div>'; 

                }
        ?>
    
        <?php


            $name = $_GET['name'] ;
            $mail = $_GET['email'];
            $age = $_GET['age'];
            $find = strpos($mail, '@');
            $find2 = strpos($mail, '.');
            $isInt = is_numeric($age);
            if(strlen($name) < 3 || $find === false || $find2 === false || $isInt === false){
                echo '<h1 class="error">' . 'accesso negato' . '</h1>';
            }
            else{
                echo '<h1 class="valid">' . 'accesso riuscito' . '</h1>';
            }

        ?>
    


</body>

</html>