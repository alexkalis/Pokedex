<?php
class Pikachu extends Pokemon {
  public function __construct()
    {
       $name = 'Pika';
       $energyType = 'Lightning';
       $hitpoints = 60;
       $weakness = 'Fire | 1,5';
       $resistance= 'fighting | 20';
        $myAttacks = [
          new Attack('Electric Ring',50), new Attack('Pika Punch', 20)
        ];
      
        parent::__construct($name, $energyType, $hitpoints, $myAttacks,$weakness,$resistance);
    }
}
