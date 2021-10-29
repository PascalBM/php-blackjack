<?php
class Player {
    // Public Properties
    private $cards = [];
    private $lost = false;

    //
    public function __construct($deck)
    {
        array_push($this->cards,$deck->drawCards());
        array_push($this->cards,$deck->drawCards());
    }

    // Declare a public method
    public function hit() {
        if ($score = $this-> getScore());
    }
    public function surrender() {
        $this->lost = false;
    }
    public function getScore() {
        $score = 0;
        foreach($this->cards as $card){
            $score += $card->getValue();
        }
        return $this->score;
    }
    public function hasLost() {
        return $this->lost;
    }
}