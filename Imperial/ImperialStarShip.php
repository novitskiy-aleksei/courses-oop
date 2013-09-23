<?php

namespace Imperial;

use BaseShip\StarShip;
use Republic\RepublicStarShip;

abstract class ImperialStarShip extends StarShip{

    protected $type = 'Star ship of Imperial Fleet';

    public function killRepublicShip(RepublicStarShip $ship)
    {
        $ship->_die();
    }

}