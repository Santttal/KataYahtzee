<?php

namespace yahtzee\combination;

use yahtzee\Combination;

class CombinationFactory
{
    /**
     * @return Combination[]
     */
    public function createAllCombinations()
    {
        $combinations = [];
        $combinations[] = $this->createCombination(Combination::ONES_TWOS_THREES_FOURS_FIVES_SIXES);
        $combinations[] = $this->createCombination(Combination::PAIR);
        $combinations[] = $this->createCombination(Combination::TWO_PAIRS);
        $combinations[] = $this->createCombination(Combination::THREE_OF_A_KIND);
        $combinations[] = $this->createCombination(Combination::FOUR_OF_A_KIND);
        $combinations[] = $this->createCombination(Combination::SMALL_STRAIGHT);
        $combinations[] = $this->createCombination(Combination::LARGE_STRAIGHT);
        $combinations[] = $this->createCombination(Combination::FULL_HOUSE);
        $combinations[] = $this->createCombination(Combination::YAHTZEE);
        $combinations[] = $this->createCombination(Combination::CHANCE);

        return $combinations;
    }

    /**
     * @param string $name
     * @return Combination
     */
    private function createCombination($name)
    {
        return new Combination($name);
    }
}
