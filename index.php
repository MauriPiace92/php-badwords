<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php-badwords</title>
</head>
<body>

    <?php

        $miaStringa = 'oh Cavolo, ho perso il mio telefono!';

        $miaStringaLength = strlen($miaStringa);

        // parola da censurare:
        $wordToCensore = 'badword';

        
        $badword = $_GET[$wordToCensore];


        $censurata = str_replace($badword, '***', $miaStringa);
    ?>

    <h2>Frase Originale:</h2>
    <p> <?php echo $miaStringa ?> </p>
    <p>lunghezza della mia frase: <?php echo $miaStringaLength ?> caratteri.</p>

    <h2>frase Censurata:</h2>
    <p> <?php echo $censurata ?> </p>
    
</body>
</html>