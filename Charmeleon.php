<?php
require_once 'Attack.php';
class Charmeleon extends Pokemon {


  public function __construct()
    {
      $name = 'Caramel';
      $energyType = 'Fire';
      $hitpoints = 60;
      $weakness = new Weakness('Water',2);
      $resistance= new Resistance('Lightning', 10);
      $myAttacks = [
        new Attack('Ember',10), new Attack('Flamethrower', 30)
      ];

        parent::__construct($name, $energyType, $hitpoints, $myAttacks,$weakness,$resistance);
    }
}



 ?>
