<?php
class Charmeleon extends Pokemon {
  public $name = 'Caramel';
  public $energyType = 'Fire';
  public $hitpoints = 60;
  public $attacks = array ('Ember | 10','Flamethrower | 30');
  public $weakness = 'Water | 2';
  public $resistance= 'Lightning | 10';

  public function __construct()
    {
        parent::__construct($this->name, $this->energyType, $this->hitpoints, $this->attacks,$this->weakness,$this->resistance);
    }
}



 ?>
