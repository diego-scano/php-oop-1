<?php

class Guitar {

  public $marca;
  public $modello;
  public $tipo;
  public $numeroCorde = 6;

  public function __construct($marca, $modello, $tipo, $numeroCorde) {
    $this->marca = $marca;
    $this->modello = $modello;
    $this->tipo = $tipo;
    $this->numeroCorde = $numeroCorde;
  }

}

$gibsones335 = new Guitar('gibson', 'es-335', 'semiacustica', 6);
$fenderstrato = new Guitar('fender', 'stratocaster', 'elettrica', 6);
$martind28 = new Guitar('martin', 'd-28', 'acustica', 6);
$ekocs10 = new Guitar('eko', 'cs-10', 'classica', 6);

var_dump($gibsones335, $fenderstrato, $martind28, $ekocs10);
