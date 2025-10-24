<?php
namespace Practica3;


class JugarVideojuego extends Hobby {
  private $compania;
  private $precio;

  //hace el array para el get y set "magicos"
  protected $data = array();

  private static $numJuegos= 0;

  const HORASMAX=6;
  const HORASMIN=1;
  private static $horasUsadas=0;

  public function __construct($nombre, $compania, $precio)
  {
    parent::__construct($nombre);
    $this->compania=$compania;
    $this->precio=$precio;

    self::$numJuegos++;
  }

  public function __destruct()
  {
    echo "Quitando ".$this->getNombre()."<br>";
    self::$numJuegos--;
  }

  //y para llamarlo usas solo la key
  public function __get( $key )
  {
    return $this->data[ $key ];
  }

  //con el set pones la key y el value
  public function __set( $key, $value )
  {
    $this->data[ $key ] = $value;
  }

  public function getcompania()
  {
    return $this->compania;
  }

  public function getPrecio()
  {
    return $this->precio;
  }

  public function setcompania($compania): void
  {
    $this->compania = $compania;
  }

  public function setPrecio($precio):void
  {
    $this->precio = $precio;
  }

  public function __toString(){
    return  "Titulo: ".$this->getNombre()." / Compañia: ".$this->compania." / Precio: ".$this->precio." Ahora hay un total de ".self::$numJuegos." libros."."<br>";
  }
  public function iniciar(int $horas=0)
  {
    if($horas>self::HORASMAX || (self::$horasUsadas+$horas)>self::HORASMAX){
      echo "Estas usando más horas de las horas máximas estipuladas <br>";

    }else if($horas<self::HORASMIN){
      echo "Deben ser más de ".self::HORASMIN."<br>";
    }else{
      self::$horasUsadas+=$horas;
      echo "Empezando a jugar al juego ".$this->getNombre()." usando $horas horas, has usado ".self::$horasUsadas."<br>";
    }
  }

  public function detener()
  {
    echo "Parando de jugar al juego ".$this->getNombre()."<br>";
  }

  public function actualizar(array $a)
  {
    echo "Actualizando la lectura de ".$this->getNombre();
    $this->setNombre($a["nombre"]);
    $this->setcompania($a["compañia"]);
    $this->setPrecio($a["precio"]);
    echo "Actualizado la lectura de ".$this->getNombre();
  }
}
