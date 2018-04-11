<?php
class Pokemon {

  public $name;
  public $energyType;
  public $hitpoints;
  public $attacks;
  public $weakness;
  public $resistance;
//constructing the objects?
  public function __construct($name,$energyType,$hitpoints,$attacks,$weakness,$resistance) {
    $this->name = $name;
    $this->energyType = $energyType;
    $this->hitpoints = $hitpoints;
    $this->attacks = $attacks;
    $this->weakness = $weakness;
    $this->resistance = $resistance;
  }
//json encode this
  public function __toString() {
    return json_encode($this);
  }

  //Attack target with Attack.
  public function attack($target,$attacknr) {
    $target->defend($this->attacks[$attacknr], $this->energyType);
  }
//The defend class
  public function defend($attack,$attackerEnergytype) {
    //check if resistance is the same as attacker energy type and then minus
    if ($this->resistance == $attackerEnergytype) {
        $newDamage =  $attack->damage - $minus;
    }
    //check if weakness is the same as attacker energy type and then multiply
    elseif ($this->weakness == $attackerEnergytype) {
        $newDamage = $attack->damage *  $multiplier;
    }
    else {
      //if none of those things then just attack
        $newDamage = $this->hitpoints - $attack->damage;
    }
    //set the new health
    $this->hitpoints = $this->hitpoints - $newDamage;

  echo "<br>";
  echo "hp van de verdediger = ";
  echo $this->hitpoints;
  echo "<br>";
  }
//show functions for each different attribute
  public function showHitpoints()  {
     echo '<h2> These are the hitpoints: ' . $this->hitpoints . '</h2>';
  }

  public function showName()  {
    echo '<h2> This is the name: ' . $this->name . '</h2>';
  }
  public function showAttacks(){
    $result ='';
    foreach ($this->attacks as $atk) {
      $result .= '<h2> This is a attack: ' . $atk . '</h2>';
    }
    return $result;
  }
  public function showWeakness(){
   echo '<h2> This is the weakness: ' . $this->weakness . '</h2>';
  }
  public function showResistance(){
   echo '<h2> This is the resistance: ' . $this->resistance . '</h2>';
  }
  public function showEnergyType(){
   echo '<h2> This is the energy type: ' . $this->energyType . '</h2>';
  }
  // public function fight() {
  //
  //return $this->$name . ' s energyType=  ' . $this->energyType . ' hp= ' . $this->hitpoints . 'attack 1 = ' . $this->attack1 . 'attack 2 = ' . $this->attack2 . 'the weakness = ' . $this->weakness . 'resistance = ' $this->resistance;
  //   }
}


 ?>
