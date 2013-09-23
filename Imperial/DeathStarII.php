<?php

namespace Imperial;

class DeathStarII extends ImperialStarShip{

    protected $type = 'DeathStar II';

    public function killAll(Array $victims)
    {
        /** @var $victim \Republic\RepublicStarShip */
        foreach($victims as $victim){
            $victim->_die();
        }
    }
}