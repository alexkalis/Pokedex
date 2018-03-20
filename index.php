<?php
// require 'Attack.php';
require 'autoload.php';

$pikachu = new Pikachu();
$pikachu->showName();
$pikachu->showHitpoints();
$pikachu->showEnergyType();
echo($pikachu->showAttacks());
$pikachu->showWeakness();
$pikachu->showResistance();
print_r('<pre>' . $pikachu . '</pre>');
$charmeleon = new Charmeleon();
$charmeleon->showName();
$charmeleon->showHitpoints();
$charmeleon->showEnergyType();
$charmeleon->showAttacks();
$charmeleon->showWeakness();
$charmeleon->showResistance();


print_r('<pre>' . $charmeleon . '</pre>');
 ?>
