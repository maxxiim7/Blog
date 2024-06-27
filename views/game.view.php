<!DOCTYPE html>
<html lang="en">
    <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Games            </title>
    <link rel="stylesheet" href="styles/style.css">
</head>
<body>
<?php require "partials/header.php" ?>
<main>
    <div class="container">
        <?php include "partials/empty.php"?>
        <?php include "partials/navbarleft.php"?>
        <div class="mainbar">
        <div class="gamecontainer">
                <a href="games/rps.php" class="gamelink"><img src="img/schere.png" alt="scissors"><h2>Rock Paper Scissors</h2></a>
                <a href="games/chess.php" class="gamelink"><img src="img/chess.png" alt="chess"><h2>Chess</h2></a>
                <a href="https://tetris.com/play-tetris" target="_blank" class="gamelink"><img src="img/tetris.png" alt="tetris"><h2>Tetris</h2></a>
                <a href="games/tictactoe.html" class="gamelink"><img src="img/tictactoe.png" alt="tetris"><H2>Tic Tac Toe</H2></a>
            </div>
        </div>
        
        <?php include "partials/empty.php"?>
    </div>
</main>
</body>
</html>