<?php
declare(strict_types = 1);

namespace PhpOop\Ch02\Challenge;

require_once('Bicycle.php');

$bike = new Bicycle();
$bike->brand = 'Trek';
$bike->model = 'Èmonda';
$bike->year = '2007';
// $bike->description='';
echo $bike->name() ."<br>";
echo number_format($bike->get_weight_Ibs(),2)."<br>";
$bike->set_weight_Ibs(1.0);
echo number_format($bike->get_weight_Ibs(),2)."<br>";

$bike2 = new Bicycle();
$bike2->brand = 'Cannondale';
$bike2->model = 'Synapse';
$bike2->year = '2015';
// $bike2->description='';
echo $bike2->name() ."<br>";
$bike2->weight_kg = 8.0;
echo $bike2->get_weight_Ibs()."<br>";
$bike2->set_weight_Ibs(16.0);
echo $bike2->get_weight_Ibs()."<br>";