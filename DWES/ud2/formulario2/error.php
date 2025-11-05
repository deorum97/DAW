<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ERROR</title>
</head>
<body>
    <h1 style="color:red">Error</h1>
    <?php
        if($_GET["error"]==="u"){
            ?>
            <h2>Fallo de usuario</h2>
            <?php
        }else{
             ?>
            <h2>Fallo de clave</h2>
            <?php
        }
    ?>
</body>
</html>