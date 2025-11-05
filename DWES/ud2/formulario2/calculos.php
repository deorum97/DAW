<?php
    session_start();
    if(isset($_SESSION["contador"])){
        if($_SESSION["contador"]>=5){
            header("Location:ecuacion.php");
        }
    }
?>

<!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calcula</title>
</head>
<body>
    <form action="resolucion.php" method="get">
        <label>
            <input type="number" name="priValor" value="0">
        </label>
        <select name="operador">
            <option value="+">+</option>
            <option value="-">-</option>
            <option value="*">*</option>
            <option value="/">/</option>
        </select>
        <label>
            <input type="number" name="segValor" value="0">
        </label>
        <br>
        <input type="submit" value="Calcular">
    </form>

    <?php
        if(isset($_GET["res"])){
            if($_GET["res"]==="fallo0"){
                echo "No se puede dividir entre 0";
            }else{
                echo `<p>Resultado anterior: `.$_GET["res"];
            }
            
        }
    ?>
</body>
</html>