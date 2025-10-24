<?php
require_once("ICocheDAO.php");
require_once("Coche.php");
Class CocheDAO implements ICocheDAO {

private $archivo = "coches.csv";

    public function crear(Coche $coche) {


        if (is_writable($this->archivo)) {

            if (!$fp = fopen($this->archivo, 'a+')) {
                 echo "Cannot open file ($this->archivo)";
                 exit;
            }
        
                $cocheA = [
                    "matricula" => str_pad($coche->matricula, 10, "@"),
                    "marca" => str_pad($coche->marca, 30, "@"),
                    "modelo" => str_pad($coche->modelo, 30, "@"),
                    "potencia" => str_pad($coche->potencia, 10, "@"),
                    "velocidadMax" => str_pad($coche->velocidadMax, 10, "@"),
                ];

                $write = implode(",", $cocheA);

                while (fgets($this->archivo) != null) {
                    echo fgets($this->archivo);
                }

            if (fwrite($fp, $write . "\n") === FALSE) {
                echo "Cannot write to file ($this->archivo)";
                exit;
            }
        
        
            fclose($fp);
        
        } else {
            echo "The file $this->archivo is not writable";
        }
}

    public function obtenerCoche($matricula) {
    
}

    public function eliminar($matricula) {
    
}

    public function actualizar($matricula, Coche $nuevoCoche) {
    
}

    public function verTodos() {
    
}

}


?>