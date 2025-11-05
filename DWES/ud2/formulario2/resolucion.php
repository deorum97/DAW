<?php
    session_start();
    if(!isset($_SESSION["contador"])){
        $_SESSION["contador"]=0;
    }
    $p=$_GET["priValor"];
    $s=$_GET["segValor"];
    $o=$_GET["operador"];

    $r=0;
    switch($o){
        case "+":
            $r=$p+$s;
            contador($r);
            break;
        case "-":
            $r=$p-$s;
            contador($r);
            break;
        case "*":
            $r=$p*$s;
            contador($r);
            break;
        case "/":
            if($s==="0"){
                header("Location:calculos.php?res=fallo0");
            }
            $r=$p/$s;
            contador($r);
            break;
    }

    function contador($r){
        if($r<=1000){
            $_SESSION["contador"]++;
        }else if($_SESSION["contador"]>=5){
            header("Location:ecuacion.php");
        }
        header("Location:calculos.php?res=$r");
    }