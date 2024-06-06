<?php 
session_start();
require "Database.php";
include "functions/functions.php";

$config = require "config.php";
$db = new Database($config["database"]);

if (isset($_SESSION["username"])) {
    $username  = $_SESSION["username"]; 
    

    $query = $db->connection->prepare("SELECT posts.* FROM posts INNER JOIN users ON posts.user_id = users.id WHERE username = ?");
    $query->execute([$username]);
    $posts = $query->fetchAll();
    
    $postid = $_POST["post_id"];
    $postid = preg_replace('/[^0-9]/', '', $postid);
    $query = $db->connection->prepare("DELETE FROM posts WHERE id = ?");
    $query->execute([$postid]);
    
    header("Location: /profile");
}