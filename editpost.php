<link rel="stylesheet" href="styles/style.css">
<style>
    h1 {color:whitesmoke; text-align: center; padding-top: 1.25vw; margin-bottom: 1vw;}
</style>
<?php 
session_start();
require "functions/functions.php";
require "Database.php";
$config = require "config.php";
$db = new Database($config["database"]);

if (isset($_SESSION["username"])) {
    $username  = $_SESSION["username"];

$query = $db->connection->prepare("SELECT posts.* FROM posts INNER JOIN users ON posts.user_id = users.id WHERE username = ? AND posts.id = ?");
$postid = $_POST["post_id"];
$postid = preg_replace('/[^0-9]/', '', $postid);
$_SESSION["postid"] = $postid;
$query->execute([$username, $postid]);
$titles = $query->fetchAll();

    echo "<h1>Edit Post:</h1>";
    foreach ($titles as $post) {
        $title = $post["title"];
        echo    "<form action='updatePost.php' method='post'>
                <textarea class='editarea' id='text' name='text'> $title </textarea>
                <input class='savebutton' type='submit' value='Save'/>
                </form>";    
    }    
}
?>