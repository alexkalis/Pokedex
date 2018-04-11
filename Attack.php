<?php
//autoloader
spl_autoload_register(function ($class_name) {
  include $class_name . '.php';
});
//attack class
class Attack {
  public $name;
  public $damage;

  public function __construct($name,$damage) {
    $this->name = $name;
    $this->damage = $damage;
  }
  //turn json to text
  public function __toString() {
    return $this->name . ', ' . $this->damage;
  }
}


 ?>
