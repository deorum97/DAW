<?php

class Coche {
    private $matricula, $marca, $modelo, $potencia, $velocidadMax;

    function __construct($matricula, $marca, $modelo) {
        $this->matricula = $matricula;
        $this->marca = $marca;
        $this->modelo  = $modelo;
        $this->potencia = 90;
        $this->velocidadMax = 200;
    }

    public function __get($valor) {
        if (property_exists($this, $valor)) {
            return $this->$valor; 
        }
    }

    public function __set($valor, $nuevovalor) {
        if (property_exists($this, $valor)) {
            $this->$valor = $nuevovalor;
        }
    }

}


/*
matricula = 10
marca = 30
modelo = 30
potencia = 10
velocidadMax = 10

94 

4 caracteres
*/

?>