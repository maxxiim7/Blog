<?php 
require "Database.php";

$config = require("config.php"); 
$db = new Database($config["database"]); // <-- das muss auf "database" pointen weil es in der config.php ein array im array ist 

$query = "SELECT * from posts"; // <--  niemals einen wert inlinen (z.B. "select * from posts where id = $id), dadurch können BÖSE leute SQL-commands über dir suchleiste einfügen und beispielsweise den Daten Table einfach löschen !´
$posts = $db->query($query)->fetchAll();  

$query = "select * from users";
$users = $db->query($query)->fetchAll();



echo "<div class='postcontainer'>";


foreach ($posts as $post) {
           
$userindex = array_search($post["user_id"], array_column($users, "id"));

echo "<p>" .$users[$userindex]["username"]. "</p>". "<li>" . $post["title"]. "</li>";               
}
    echo "</div>";                        
