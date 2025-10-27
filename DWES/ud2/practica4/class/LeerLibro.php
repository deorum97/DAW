<?php


  class LeerLibro extends Hobby {
    private $paginas;
    private $autor;

    private $precio;

    //hace el array para el get y set "magicos"
    protected $data = array();

    public function __construct($nombre, $paginas, $autor,$precio)
    {
      parent::__construct($nombre);
      $this->paginas=$paginas;
      $this->autor=$autor;
      $this->precio=$precio;

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
      return  "Titulo: ".$this->getNombre()." / Páginas: ".$this->paginas." / Autor: ".$this->autor." / Precio: ".$this->precio."<br>";
    }

    
  }
