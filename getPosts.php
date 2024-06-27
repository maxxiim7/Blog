<?php 

require "Database.php";

$config = require "config.php";
$db = new Database($config["database"]);

if (isset($_SESSION["username"])) {
    $username = $_SESSION["username"];

    $query= $db->connection->prepare("SELECT posts.* FROM posts INNER JOIN users ON posts.user_id = users.id WHERE username = ?");
    $query->execute([$username]);
    $titles = $query->fetchAll();
        foreach ($titles as $title ) {
            echo "<div class='postcontainer'>" . "<p>". $username . "</p>" . "<li class ='userPost'>" . $title["title"] . "</li>";
        ?>
            <div class='postbuttons'>
                    <form class="myForm" action="editpost.php" method="post"> <!-- Bei action kommt editpost.php rein!  -->
                    <textarea class="editarea" style="display: none;  name="text"> <?= $title["title"] ?> </textarea>
                    <input type="hidden" name="post_id" value="<?= $title["id"] ?>"/>
                    <input class="editpost" type="submit" value="Edit" id="edit-<?= $title["id"] ?>"/>
                </form>
                    <form action="../deletepost.php" method="post">
                    <input type="hidden" name="post_id" value="' .<?= $title["id"] ?>. '" />
                    <input class="deletepost" type="submit" value="Delete" /> </form>
                    </div>
                    </div>
        <?php

        }
            echo '<!DOCTYPE html>
            <html lang="en">
            <head>
                <meta charset="UTF-8">
                <meta name="viewport" content="width=device-width, initial-scale=1.0">
                <title>Document</title>
            </head>
            <body>

            </body>
            </html>';
    }


/* if (ich Edit drücke) {
    änder denselben button zu Save;
    öffne ein textarea mit dem text vom zugehörigen Post;
    Hide den text der davor angezeigt wurde;
}
if (ich Save drücke) {
    speicher den geänderten Text in die Datenbank mit UPDATE title from posts where tilte = title[id];
    zeig den gehideten Text wieder an; 
    änder den Button wieder in Edit 
}
*/ 