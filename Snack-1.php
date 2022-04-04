<?php

$partite = [
    [
        'casa' => 'Roma',
        'ospite' => 'Latina',
        'punti_casa' => '22',
        'punti_ospite' => '17',
    ],
    [
        'casa' => 'Milano',
        'ospite' => 'Firenze',
        'punti_casa' => '42',
        'punti_ospite' => '35',
    ],
    [
        'casa' => 'Palermo',
        'ospite' => 'Catania',
        'punti_casa' => '18',
        'punti_ospite' => '94',
    ],
]

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Snack-1</title>
</head>
<body>
    
    <h1>Risultati partite</h1>
    <ul>
        <?php

        for($i=0; $i<count($partite); $i++) {
            ?>

            <li>
                <?php echo "{$partite[$i]['casa']} - {$partite[$i]['ospite']} | {$partite[$i]['punti_casa']} - {$partite[$i]['punti_ospite']}" ?>
            </li>

            <?php
        }
        ?>

    </ul>

</body>
</html>