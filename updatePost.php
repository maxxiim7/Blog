<?php 
    session_start();
    require "functions/functions.php";
    require "Database.php";
    
    
    $text = $_POST["text"];
    $config = require "config.php";
    $db = new Database($config["database"]);
    
    try {
    $query = $db->connection->prepare("UPDATE posts SET title = :text WHERE id = :id");
    $query->bindParam(':text', $text);
    $query->bindParam(':id', $_SESSION["postid"]);
    $query->execute();

    header("Location: /profile");
    exit();
    } catch (PDOException $e) {
        echo "Error: ". $e->getMessage();
    }
