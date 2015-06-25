<?php

namespace yahtzee;

use yahtzee\combination\CombinationFactory;

class Player
{
    /** @var Combination[] */
    private $combinations;
    private $score;
    private $name;

    public function __construct($name, CombinationFactory $factory)
    {
        $this->name = $name;
        $this->combinations =$factory->createAllCombinations();
        $this->score = 0;
    }
}
