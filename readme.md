# BoardGameManager

Tool designed to meet the description below. This project was implemented for the course "Middleware Technologies for Distributed Systems" for the academic year 2016-17 of the Politecnico di Milano.

# Description

The goal of this project is to create a service that can help people keep track of their board games nights. The Board Game Manager should provide a REST API for:

* Creating new users (each user should have a unique id and a name),
* Listing the users in the system (ordering/filtering by specific attributes),
* Viewing a user's details,
* Adding new board games to an online database,
* Listing the board games available in the online database (ordering/filtering by specific attributes),
* Viewing a board game's details (a board game will always have an id, a name, a list of designers, and a .jpg file of the board game's cover art),
* Creating a new boardgame "play" (A play is associated to a specific user and to a specific game in the database, and contains a date. It can optionally also contain additional data such as the amount of time it took to complete the game, how many players were involved, and the id of the user that won the game, if applicable.),
* Viewing existing plays by user (ordering/filtering by board game and/or date).

The API should be developed in such a way as to support Hypermedia whenever suitable.

# Software used

This tool was written using Laravel Framework.

# HTTP Requests

## Get Requests

These are the URLs I use to test the system. To have them handy. Most likely, these URLs should be different for other installations.

* http://127.0.0.1/middleware/BoardGameManager/public/user/1/plays?order=bgame_id-asc&bgame_max=2000&bgame_min=2=1&min_date=2000-01-01&max_date=2018-01-01
* http://127.0.0.1/middleware/BoardGameManager/public/users?order=id_asc&filter=&min_id=1&max_id=200
* http://127.0.0.1/middleware/BoardGameManager/public/user/1
* http://127.0.0.1/middleware/BoardGameManager/public/board-games?order=id_asc&filter=&min_id=0&max_id=2000
* http://127.0.0.1/middleware/BoardGameManager/public/board-game/1

## Post Requests

* post /user
* post /board-game
* post /play
* post /user/{user_id}/plays/search
