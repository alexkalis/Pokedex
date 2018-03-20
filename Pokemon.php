<?php
class Pokemon {
  public $name;
  public $energyType;
  public $hitpoints;
  public $attacks;
  public $weakness;
  public $resistance;


  public function __construct($name,$energyType,$hitpoints,$attacks,$weakness,$resistance) {
    $this->name = $name;
    $this->energyType = $energyType;
    $this->hitpoints = $hitpoints;
    $this->attacks = $attacks;
    $this->weakness = $weakness;
    $this->resistance = $resistance;
  }
  public function __toString() {
     return json_encode($this);
            }


    public function showHitpoints()
 {
     echo '<h2> These are the hitpoints: ' . $this->hitpoints . '</h2>';
 }
 public function showName()
{
  echo '<h2> This is the name: ' . $this->name . '</h2>';
}
public function showAttack1()
{
 echo '<h2> This is attack one: ' . $this->attacks[0] . '</h2>';
}
public function showAttack2()
{
 echo '<h2> This is attack two: ' . $this->attacks[1] . '</h2>';
}
public function showWeakness()
{
 echo '<h2> This is the weakness: ' . $this->weakness . '</h2>';
}
public function showResistance()
{
 echo '<h2> This is the resistance: ' . $this->resistance . '</h2>';
}
public function showEnergyType()
{
 echo '<h2> This is the energy type: ' . $this->energyType . '</h2>';
}
  // public function fight() {
  //
  //     return $this->$name . ' s energyType=  ' . $this->energyType . ' hp= ' . $this->hitpoints . 'attack 1 = ' . $this->attack1 . 'attack 2 = ' . $this->attack2 . 'the weakness = ' . $this->weakness . 'resistance = ' $this->resistance;
  //   }
}


 ?>
