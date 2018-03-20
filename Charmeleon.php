<?php
require_once 'Attack.php';
class Charmeleon extends Pokemon {


  public function __construct()
    {
      $name = 'Caramel';
      $energyType = 'Fire';
      $hitpoints = 60;
      $weakness = 'Water | 2';
      $resistance= 'Lightning | 10';
      $myAttacks = [
        new Attack('Ember',10), new Attack('Flamethrower', 30)
      ];

        parent::__construct($name, $energyType, $hitpoints, $myAttacks,$weakness,$resistance);
    }
}



 ?>
