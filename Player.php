<?php
class Player {
    // Public Properties
    public $cards = [];
    public $lost = false;

    public function __construct()
    {
        
    }

    // Declare a public method
    public function hit() { }
    public function surrender() { }
    public function getScore() { }
    public function hasLost() { }
}