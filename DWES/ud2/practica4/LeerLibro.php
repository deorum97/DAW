<?php
  namespace Practica4;


  class leerLibro extends Hobby {
    private $paginas;
    private $autor;

    private $precio;

    const MAX_PAG = 1000;
    private static $numLibros= 0;
    const HORASMAX=6;
    const HORASMIN=1;
    private static $horasUsadas=0;

    public function __construct($nombre, $paginas, $autor,$precio)
    {
      parent::__construct($nombre);
      $this->paginas=$paginas;
      $this->autor=$autor;
      $this->precio=$precio;

      self::$numLibros++;
    }

    public function __destruct()
    {
      echo "Quitando ".$this->getNombre()."<br>";
      self::$numLibros--;
    }

    public function getPaginas()
    {
      return $this->paginas;
    }
    public function getAutor()
    {
      return $this->autor;
    }

    public function getPrecio()
    {
      return $this->precio;
    }

    public function setPaginas($paginas): void
    {
      $this->paginas = $paginas;
    }

    public function setAutor($autor): void
    {
      $this->autor = $autor;
    }

    public function setPrecio($precio):void
    {
      $this->precio = $precio;
    }

    public function __toString(){
      return  "Titulo: ".$this->getNombre()." / Páginas: ".$this->paginas." / Autor: ".$this->autor." / Precio: ".$this->precio." Ahora hay un total de ".self::$numLibros." libros."."<br>";
    }

    public function iniciar(int $horas=0)
    {
      if($horas>self::HORASMAX || (self::$horasUsadas+$horas)>self::HORASMAX){
        echo "Estas usando más horas de las horas máximas estipuladas <br>";

      }else if($horas<self::HORASMIN){
        echo "Deben ser más de ".self::HORASMIN."<br>";
      }else{
        self::$horasUsadas+=$horas;
        echo "Empezando a leer el libro ".$this->getNombre()." usando $horas horas, has usado ".self::$horasUsadas."<br>";
      }
    }

    public function detener()
    {
      echo "Parando de leer el libro ".$this->getNombre()."<br>";
    }

    public function actualizar(array $a)
    {
      echo "Actualizando la lectura de ".$this->getNombre();
      $this->setNombre($a["nombre"]);
      $this->setPaginas($a["pagina"]);
      $this->setAutor($a["autor"]);
      $this->setPrecio($a["precio"]);
      echo "Actualizado la lectura de ".$this->getNombre();
    }
  }
