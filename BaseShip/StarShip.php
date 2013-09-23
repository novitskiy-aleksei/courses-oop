<?php

namespace BaseShip;

abstract class StarShip implements StarShipInterface{

    protected $type = 'StarShip';
    protected $position = 'base';
    protected $isAlive = true;

    public function fire(StarShip $who)
    {
        $who->_die();
    }

    public function _die()
    {
        $this->isAlive = false;
        echo "<p style='color: red'>Star ship '{$this->type}' destroyed!</p>";
    }

    public function fly($destination)
    {
        $this->position = $destination;
        $this->arrived();
    }

    private function arrived()
    {
        echo "<p>Star ship '{$this->type}' arrived.</p>";
    }
}