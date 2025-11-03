<?php
function valida_obligatorio($v){
    $v = trim($v);
    if(isset($v) && !empty($v)){
        echo "True";
    }else{
        echo "False";
    }
}

valida_obligatorio("ads");