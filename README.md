# Online Battleship Game

Welcome to the Online Battleship Game, a classic naval strategy game that allows players to engage in thrilling 1vs1 battles against friends or random opponents online.

## Table of Contents

- [Features](#features)
- [Installation](#installation)
- [How to Play](#how-to-play)
- [Game Rules](#game-rules)
- [Contributing](#contributing)
- [License](#license)
- [Contact](#contact)

## Features

- Play 1vs1 Battleship matches.
- Intuitive and interactive game interface.
- Real-time updates during gameplay.
- Live instructions.


## Installation
(This game runs on localhost).
Import the navmaxia.sql file to a localhost database.

## How to Play

1. Go to index.php
2. Log in. (available login usernames:player1, player2). Password for both is "navmaxia".
3. Once logged in, hit the button "Ψάξε αντίπαλο".
4. If the other player is logged in the game will give the turn to you or your opponent.
5. Happy Battleship!


## Game Rules

- Players take turns guessing coordinates to locate and sink each other's ships.
- The first player to sink all of their opponent's ships wins.

## Api Functionality

1. Otan kanei click sto koumpi start, kanei ajax request POST kai kataxwrei ston pinaka ships tou session user tis sintetagmenes twn ploiwn tou.
2. Kathe 3 defterolepta kaleitai i function checkTurn() pou kanei ajax request kai tsekarei pios paiktis exei seira kathws kai AN oi 2 pektes exoun sindethei.
3. Kathe 3 defterolepta kaleitai i function myGridUpdate opou markarei ta apotelesmata sto diko mou pinaka.
4. Ginetai ajax gia apothikeysh twn hits kathe fora pou xtipaei o session username ena keli tou pinaka.
5. I function compareHitswithShips kanei ajax request kai sygkrinei an xtypise o session user kapoio ploio tou antipalou.
6. Ginetai ajax me to arxeio /api/anakinwsi.php kai o session user vlepei an exei nikisei.
6. I logout function kanei ajax request POST kai kanei update to column logged_in=0 stin db sto table users.

## License

This project is made by Konstantinos Tantanasis Charalampidis.

## Contact

For questions or feedback, contact us at k.tanxar@gmail.com.

---
