<?php
  interface Enviador{
    public function enviar(string $mensaje):void;
  }

  interface Registrador{
    public function registrar(string $mensaje):void;
  }

  class Notificador implements Enviador,Registrador
  {
    public function enviar(string $mensaje): void
    {
      echo "Enviando mensaje: $mensaje<br>";
    }

    public function registrar(string $mensaje): void
    {
      echo "Registrando mensaje: $mensaje<br>";
    }

  }

  $note = new Notificador();

  $note->enviar("hola");
  $note->registrar("ei");
