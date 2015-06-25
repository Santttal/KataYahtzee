<?php

namespace yahtzee;

use RuntimeException;

class Dice
{
    const MIN_SCORE = 1;
    const MAX_SCORE = 6;

    public $score;

    /**
     * @param int $score
     */
    public function __construct($score)
    {
        if ($score < self::MIN_SCORE && $score > self::MAX_SCORE) {
            throw new RuntimeException('Invalid score value');
        }
        $this->score = $score;
    }

    /**
     * @return int
     */
    public function getScore()
    {
        return $this->score;
    }

}
