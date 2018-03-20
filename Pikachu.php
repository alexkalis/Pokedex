<?php
class Pikachu extends Pokemon {
  public $name = 'Pika';
  public $energyType = 'Lightning';
  public $hitpoints = 60;
  public $attacks = array('Electric Ring | 50', 'Pika Punch | 20');
  public $weakness = 'Fire | 1,5';
  public $resistance= 'fighting | 20';


  public function __construct()
    {
        parent::__construct($this->name, $this->energyType, $this->hitpoints, $this->attacks,$this->weakness,$this->resistance);
    }
}






 ?>
