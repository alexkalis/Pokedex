<?php
spl_autoload_register(function ($class_name) {
    include $class_name . '.php';
});
//make a new pokemon
$pikachu = new Pikachu();
$pikachu->showName();
$pikachu->showHitpoints();
// $pikachu->showEnergyType();
// echo $pikachu->showAttacks();
// $pikachu->showWeakness();
// $pikachu->showResistance();

echo "<br>";

//make a new pokemon
$charmeleon = new Charmeleon();
$charmeleon->showName();
$charmeleon->showHitpoints();
// $charmeleon->showEnergyType();
//  echo $charmeleon->showAttacks();
// $charmeleon->showWeakness();
// $charmeleon->showResistance();

//attack
$pikachu->attack($charmeleon,0);
$charmeleon->attack($pikachu,0);

echo "<br>";

print_r('<pre>' . $charmeleon . '</pre>');
print_r('<pre>' . $pikachu . '</pre>');
 ?>
