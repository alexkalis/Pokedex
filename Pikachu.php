<?php
class Pikachu extends Pokemon {
  public function __construct()
    {
       $name = 'Pika';
       $energyType = 'Lightning';
       $hitpoints = 60;
       $weakness =  new Weakness('Fire' , 2);
       $resistance= new Resistance('Fighting', 10);
       $myAttacks = [
          new Attack('Electric Ring',50), new Attack('Pika Punch', 20)
        ];

        parent::__construct($name, $energyType, $hitpoints, $myAttacks,$weakness,$resistance);
    }
}
