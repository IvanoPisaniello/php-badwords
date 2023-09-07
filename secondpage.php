<?php
$filterText =  $_POST['testo'];
$filterWord = $_POST['parola'];
$textFiltered = str_replace($filterWord, "***", $filterText);

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <title>Document</title>
</head>

<body>
    <div class="container">
        <h1>Frase inserita: <?php echo $filterText ?> </h1>
        <h2>frase criptata: <?php echo $textFiltered ?></h2>
        <h3>la lunghezza della frase è di: <?php echo strlen($textFiltered) ?> caratteri </h3>
    </div>
</body>

</html>