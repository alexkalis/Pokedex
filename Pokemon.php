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
echo 'This is the target:' .$this->name ;
echo '<br>';
echo $attack;
echo '<br>';
echo $this->hitpoints;
echo '<br>';
echo $attackerEnergytype;
echo '<br>';


      if ($this->resistance == $attackerEnergytype) {
      $newDamage =  $this->hitpoints - $attack->damage - 10;
      $this->hitpoints = $this->hitpoints - $newDamage;
      }
      elseif($this->weakness == $attackerEnergytype) {
      $newDamage =  $this->hitpoints - $attack->damage *2;
      $this->hitpoints = $this->hitpoints - $newDamage;

      } else {
      $newDamage =  $this->hitpoints - $attack->damage;
      $this->hitpoints = $this->hitpoints - $newDamage;;
      }
      echo "<br>";
      echo 'This is the damage that is done: ' . $newDamage;
      echo "<br>";
      echo 'This is the health now: ' . $this->hitpoints;
      echo "<br><br>";

      //else {
      //   $this->hitpoints - $attack-damage;
      // }


// public function defend($target,$attack,$energyType) {
//   if ($this->energyType == $energyType) {
//     $this->attack * 2;
//   }
//   elseif ($this->energyType == $weakness) {
//   $this->attack *2;
//   }
// }

            // public function attack($target, $attack) {
            //
            //         $target->resistance->energytype;
            //         $this->energytype;
            //
            //         if (attacks) {
            //             if(target == true)
            //                 if($resistance == $energytype){
            //                     $target->hitpoints - ($damage - 10);
            //                 }
            //                 else($weakness == $energytype)
            //                 {
            //                     $target->hitpoints-($damage * 2);
            //
            //                 }
            //             }
            //         }
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
