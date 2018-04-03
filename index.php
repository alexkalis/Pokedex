<?php
spl_autoload_register(function ($class_name) {
    include $class_name . '.php';
});

$pikachu = new Pikachu();
$pikachu->showName();
$pikachu->showHitpoints();
$pikachu->showEnergyType();
echo $pikachu->showAttacks();
$pikachu->showWeakness();
$pikachu->showResistance();
// $pikachu->attack($pikachu->attacks[0], $pikachu);
print_r('<pre>' . $pikachu . '</pre>');


$charmeleon = new Charmeleon();
$charmeleon->showName();
$charmeleon->showHitpoints();
$charmeleon->showEnergyType();
 echo $charmeleon->showAttacks();
$charmeleon->showWeakness();
$charmeleon->showResistance();
// $charmeleon->attack($charmeleon->attacks[0], $pikachu);

print_r('<pre>' . $charmeleon . '</pre>');
 ?>
