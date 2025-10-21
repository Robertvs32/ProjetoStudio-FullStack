<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
        $dadosRecebidos = file_get_contents('php://input');

        echo "<pre>";
        print_r($dadosRecebidos);
        echo "</pre>";
    ?>
</body>
</html>