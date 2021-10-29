<?php

class Blackjack
{
// Private Properties
    private Player $player;
    private Dealer $dealer;
    private Deck $deck;

    // Player construction
    public function __construct()
    {
        $this->deck = new Deck();
        $this->deck->shuffle();
        $this->player = new Player($this->deck);
        $this->deck = new Player($this->deck);
    }
    // Public Methods
    public function Player() {
        return $player;
    }
    public function getDealer() {
        return $dealer;
    }
    public function getPlayer() {
        return $deck;
    }
}

