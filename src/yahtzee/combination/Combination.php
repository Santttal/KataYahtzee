<?php

namespace yahtzee;

class Combination
{
    const ONES_TWOS_THREES_FOURS_FIVES_SIXES = 'Ones, Twos, Threes, Fours, Fives, Sixes';
    const PAIR = 'Pair';
    const TWO_PAIRS = 'Two pairs';
    const THREE_OF_A_KIND = 'Three of a kind';
    const FOUR_OF_A_KIND = 'Four of a kind';
    const SMALL_STRAIGHT = 'Small straight';
    const LARGE_STRAIGHT = 'Large straight';
    const FULL_HOUSE = 'Full house';
    const YAHTZEE = 'Yahtzee';
    const CHANCE = 'Chance';

    private $name;
    private $used;

    /**
     * @param string $name
     */
    public function __construct($name)
    {
        $this->name = $name;
        $this->used = false;
    }

    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    public function setUsed()
    {
        $this->used = true;
    }

    /**
     * @return bool
     */
    public function isUsed()
    {
        return $this->used;
    }
}
