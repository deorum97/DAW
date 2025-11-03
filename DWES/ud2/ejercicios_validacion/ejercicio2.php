<?php

function validar($v,$min,$max){
    if (filter_var($v, FILTER_VALIDATE_INT, [
        'options' => ['min_range' => $min, 'max_range' => $max]
    ])){
        echo "true";
    }else{
        echo "false";
    }
}
    

validar(5,1,6);