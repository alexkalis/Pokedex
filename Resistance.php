<?php

//resistance class
class Resistance {

  public $resistance;
  public $minus;

  public function __construct($resistance, $minus) { //
    $this->resistance = $resistance;
    $this->minus = $minus;
  }
  public function __toString() {
    return $this->resistance. ', ' . $this->minus;
  }
}
 ?>
