# PHP Blackjack

## Started
Thursday October 28, 2021

## Discription of The Project
Making a blackjack game using php classes and objects.

## Objective of the Project
Learning OOP in PHP

## TO-DO

#### Creating the base classes
Used this links
- https://www.w3schools.com/php/php_oop_classes_objects.asp
- https://www.php.net/manual/en/language.oop5.visibility.php

1. Created a class called `Player` in the file `Player.php`. ✔
   
2. Added 2 private properties: ✔
   - `cards` (array) 
   - `lost` (bool, default = false)️
3. Added a couple of empty public methods to this class: ✔
   - `hit` 
   - `surrender`️
   - `getScore` ️
   - `hasLost` 
4. Created a class called `Blackjack` in the file `Blackjack.php`✔
5. Added 3 private properties ✔
   - `player` (Player)
   - `dealer` (Player for now)️
   - `deck`  (Deck) ️
6. Added the following public methods: ✔
   - `getPlayer` (returns the `player` object)️
   - `getDealer` (returns the `dealer` object)️
   - `getDeck` (returns the `deck` object)
7. In the [constructor] do the following: ✔ 
   need to start it
   - Instantiate the Player class twice, insert it into the `player` property and a `dealer` property.
   - Create a new [`deck` object] (code has already been written!).
   - Shuffle the cards with `shuffle` method on `deck`.
   Also googled some links to.
   - https://www.tutorialspoint.com/what-are-getters-and-setters-methods-in-php
   -https://www.youtube.com/watch?v=Eu7l8utquGY
8. In the constructor of the Player class; STILL NEED TO BE DONE! 
   Make it expect the Deck object as a parameter.
   Pass this Deck from the Blackjack constructor.
   Now draw 2 cards for the player. You have to use an existing method for this from the Deck class.
9. 