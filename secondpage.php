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
    <title>Document</title>
</head>

<body>
    <h1>Frase inserita: <?php echo $filterText ?> </h1>
    <h2>frase criptata: <?php echo $textFiltered ?></h2>
</body>

</html>