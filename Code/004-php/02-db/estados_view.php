<!DOCTYPE html>
<html lang="br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Lista de estados</title>
</head>
<body>
    <ol>
    <?php
    
    while($e = $estados->fetch()){
        echo "<li>";
        echo $e["nome"];
        echo "</li>";
    }

    ?>
    </ol>
</body>
</html>