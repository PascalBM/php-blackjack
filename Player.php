<?php
class Player {
    // Public Properties
    public $cards = array();
    public $lost = false;

    // Declare a public method
    public function hit() { }
    public function surrender() { }
    public function getScore() { }
    public function hasLost() { }
}