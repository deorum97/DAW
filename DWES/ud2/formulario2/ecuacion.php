<?php
    session_start();

    if(isset($_GET["sesion"])){
        if($_GET["sesion"]==0){
            session_unset();
            if (ini_get("session.use_cookies")) {
                $params = session_get_cookie_params();
                setcookie(session_name(), '', time() - 42000,
                    $params["path"], $params["domain"],
                    $params["secure"], $params["httponly"]
                );
            }
            session_destroy();
            header("Location:index.php");
        }else if($_GET["sesion"]==1){
            $_SESSION["contador"]=0;
            header("Location:calculos.php");
        }
    }

    if(isset($_GET["a"])){
        $a=$_GET["a"];
        $b=$_GET["b"];
        $c=$_GET["c"];
        if($pri<=0){
            echo "no se puede resolver";
        }else{
            $resP=(-$b +sqrt($b * $b - 4 * $a * $c))/ (2*$a);
            $resN=(-$b -sqrt($b * $b - 4 * $a * $c))/ (2*$a);
        }
    }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ecuacion</title>
</head>
<body>
    <a href="ecuacion.php?sesion=0">desloguearse</a><br>
    <a href="ecuacion.php?sesion=1">volver a calculos</a><br><br>
    <form method="get" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
        <input type="number" name="a" required>
        <input type="number" name="b" required>
        <input type="number" name="c" required>
        <input type="submit" value="calcular">
    </form>
    <?php
        if(isset($resP)){
            echo "Resultado:<br>";
            echo "Con la suma: $resP<br>";
            echo "Con la resta: $resN<br>";
        }
    ?>
</body>
</html>