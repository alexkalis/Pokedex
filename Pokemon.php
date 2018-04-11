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

  //Attack target with Attack.
  public function attack($target,$attacknr) {
    $target->defend($this->attacks[$attacknr], $this->energyType);
  }

  public function defend($attack,$attackerEnergytype) {
  /*  echo 'This is the target:' .$this->name ;
    echo '<br>';
    echo 'The attack done: ' . $attack;
    echo '<br>';
    echo 'The hitpoints: ' . $this->hitpoints;
    echo '<br>';
    echo'The energytype from the attacker: ' . $attackerEnergytype;
    echo '<br>';
*/
    if ($this->resistance == $attackerEnergytype) {
        $newDamage =  $attack->damage - $minus;
    }
    elseif ($this->weakness == $attackerEnergytype) {
        $newDamage = $attack->damage *  $multiplier;
    }
    else {
        $newDamage = $this->hitpoints - $attack->damage;
    }
    $this->hitpoints = $this->hitpoints - $newDamage;

  echo "<br>";
  echo "hp van de verdediger = ";
  echo $this->hitpoints;
  echo "<br>";
  }

  public function showHitpoints()
  {
     echo '<h2> These are the hitpoints: ' . $this->hitpoints . '</h2>';
  }

  public function showName()
  {
    echo '<h2> This is the name: ' . $this->name . '</h2>';
  }
public function showAttacks()
{
  $result ='';
  foreach ($this->attacks as $atk) {
    $result .= '<h2> This is a attack: ' . $atk . '</h2>';
  }
  return $result;

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
  //return $this->$name . ' s energyType=  ' . $this->energyType . ' hp= ' . $this->hitpoints . 'attack 1 = ' . $this->attack1 . 'attack 2 = ' . $this->attack2 . 'the weakness = ' . $this->weakness . 'resistance = ' $this->resistance;
  //   }




}


 ?>
