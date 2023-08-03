<?php
class Car { 
  private $num_telaio="183749";

  protected function getnum_telaio()
  {
    return $this->num_telaio;
  }
}

class Fiat extends Car {
 protected $color;
 protected $targa;

 public function __construct($targa,$color)
 {
    $this->targa=$targa;
    $this->color=$color;
 }

 public function stampa(){
    echo "La mia macchina è colore $this->color con targa $this->targa e numero di ". Car::getnum_telaio();
 }
}

$macchina=new Fiat("AGHTYU","Rossa");
$macchina->stampa();

