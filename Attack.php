<?php
spl_autoload_register(function ($class_name) {
    include $class_name . '.php';
});

class Attack {
  public $name;
  public $damage;

  public function __construct($name,$damage) {
    $this->name = $name;
    $this->damage = $damage;
  }
  public function __toString() {
     return $this->name . ', ' . $this->damage;
   }



}


 ?>
