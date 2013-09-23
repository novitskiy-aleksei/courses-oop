<?php

namespace BaseShip;


interface StarShipInterface {
    public function fly($destination);
    public function fire(StarShip $who);
}