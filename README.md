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
   - Instantiated the Player class twice, inserted it into the `player` property and a `dealer` property.
   - Created a new [`deck` object] (code has already been written!).
   - Shuffle the cards with `shuffle` method on `deck`.
   Also googled some links to.
   https://www.tutorialspoint.com/what-are-getters-and-setters-methods-in-php
   -https://www.youtube.com/watch?v=Eu7l8utquGY
   1. In the constructor of the Player class; ✔ 
   - Make it expect the Deck object as a parameter.
   - Pass this Deck from the Blackjack constructor.
   - Now draw 2 cards for the player. You have to use an existing method for this from the Deck class.
   struggles hard
8. In the [constructor] of the `Player` class;✔
   - Make it expect the `Deck` object as a parameter.
   - Pass this `Deck` from the `Blackjack` constructor.
   - Now draw 2 cards for the player. You have to use an existing method for this from the Deck class.
   links used
   - https://www.php.net/manual/en/language.oop5.decon.php
9. Go back to the `Player` class and add the following logic in your empty methods:✔
   - `getScore` loops over all the cards and return the total value of that player.
   - `hasLost` will return the bool of the lost property.
   - `hit` should add a card to the player. If this brings him above 21, set `lost` property to `true`. To count his score use the method `getScore` you wrote earlier. 
   - This method should expect the `$deck` variable as an argument from outside, to draw the card.
   - `surrender` should make you surrender the game. (Dealer wins.)
     This sets the property `lost` in the `player` instance to true.
   - `stand` does not have a method in the player class but will instead call hit on the `dealer` instance. (you have to do nothing here)

## M

#### Day 1

excerscive 7 was really hard to understand because i didn't read it well. after reading it once more and writing it down. It was more clear to me how the constructor work.

#### Day 2

The excersices went quite slow from now 