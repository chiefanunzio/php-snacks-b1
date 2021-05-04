<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<style>
body{
    
}

    .box{
        
        height:20px;
        background-color: #ccc;
    }

    .res{
        ;
        height:20px;
        background-color: green;

    }

</style>

<body>

        <?php
            $torneo = [
                'giornata-1' => [
                    [
                        'casa' => 'milano',
                        'ospite' => 'cantu',
                        'punteggio' => '55-60'
                    ],
                    
                    
                ],
                'giornata-2' => [
                    [
                        'casa' => 'taranto',
                        'ospite' => 'catania',
                        'punteggio' => '74-70'
                        
                    ],
                ]
            ];

            $giornata1 = $torneo['giornata-1'];
            $giornata2 = $torneo['giornata-2'];
                   
                    
                    for ($i=0;$i<count($giornata1);$i++) {
                        $res1 = $giornata1[$i];
                        echo '<div class="box">' 
                            . $res1['casa'] . ' - ' 
                            . $res1['ospite'] . ' - ' 
                            . $res1['punteggio']
                            .'</div>'; 
                           
                        
                           
                        }
                    for ($i=0;$i<count($giornata2);$i++) {
                        $res2 = $giornata2[$i];
                        echo '<div class="box">' 
                            . $res2['casa'] . ' - ' 
                            . $res2['ospite'] . ' - ' 
                            . $res2['punteggio']
                            .'</div>'; 
                           
                    }
            


        ?>
    







</body>

</html>