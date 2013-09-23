<?php

// base ship classes
require_once('BaseShip/StarShipInterface.php');
require_once('BaseShip/StarShip.php');

// imperial fleet
require_once('Imperial/ImperialStarShip.php');
require_once('Imperial/DeathStarII.php');

// republic forces
require_once('Republic/RepublicStarShip.php');
require_once('Republic/SunGem.php');
require_once('Republic/StarSeaFlower.php');

const EARTH_DESTINATION = 'earth';

$deathStar = new \Imperial\DeathStarII();
$deathStar->fly(EARTH_DESTINATION);

$sunGem = new \Republic\SunGem();
$starSeaFlower = new \Republic\StarSeaFlower();

$sunGem->fly(EARTH_DESTINATION);
$starSeaFlower->fly(EARTH_DESTINATION);

$deathStar->killAll([$sunGem, $starSeaFlower]);