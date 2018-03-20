<?php
// require 'Attack.php';
require 'autoload.php';

$pikachu = new Pikachu();

$attack = explode(0,1);
var_dump($attack);

$pikachu->showName();
$pikachu->showHitpoints();
$pikachu->showEnergyType();
$pikachu->showAttack1();
$pikachu->showAttack2();
$pikachu->showWeakness();
$pikachu->showResistance();
print_r('<pre>' . $pikachu . '</pre>');
$charmeleon = new Charmeleon();
$charmeleon->showName();
$charmeleon->showHitpoints();
$charmeleon->showEnergyType();
$charmeleon->showAttack1();
$charmeleon->showAttack2();
$charmeleon->showWeakness();
$charmeleon->showResistance();


print_r('<pre>' . $charmeleon . '</pre>');
 ?>
