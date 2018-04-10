<?php
class Weakness {
public $energyType;
//public $multiplier;

public function __construct($energyType) { //, $multiplier
  $this->energytype = $energyType;
  //$this->multiplier = $multiplier;
}
public function __toString() {
   return $this->energytype; //. ', ' . $this->multiplier;
 }
}
 ?>
