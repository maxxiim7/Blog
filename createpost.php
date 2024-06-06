<?php 
session_start();
require "Database.php";
include "functions/functions.php";

$config = require "config.php";
$db = new Database($config["database"]);


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Check if 'text' field is set in the POST data
    if (isset($_POST["text"])) {
        $postText = $_POST["text"];
        // Ensure user is logged in
        if (isset($_SESSION["username"])) {
            $username = $_SESSION["username"];
            // Fetch user ID based on the username
            $query = $db->connection->prepare("SELECT id FROM users WHERE username = ?");
            $query->execute([$username]);
            $userid = $query->fetchColumn(); // Fetch the user ID

            // Validate input 
            if (!empty($postText)) {
                // Insert post into database
                $query = "INSERT INTO posts (title, user_id) VALUES (?, ?)";
                $stmt = $db->connection->prepare($query);
                if ($stmt->execute([$postText, $userid])) {
                    // Insertion successful, redirect
                    header("Location: /");
                    exit(); // making sure script stops executing after redirection
                } else {
                    // Error handling for failed insertion
                    echo "Failed to insert post.";
                }
            } else {
                // Input validation failed
                echo "Post text cannot be empty.";
            }
        } else {
            // User is not logged in
            echo "User not logged in.";
        }
    } else {
        echo "Post data not received.";
    }
}

/* if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Check if 'text' field is set in the POST data
    if (isset($_POST["text"])) {
        $postText = $_POST["text"];
        $username = $_SESSION["username"];

        $query= $db->connection->prepare("SELECT id FROM users WHERE username = '$username'");
        $query->execute();
        $userid = $query->fetchAll(); 
        


        // Validate input 
        if (!empty($postText)) {
            $query = "INSERT INTO posts (title,user_id) VALUES (?,?)";
            $stmt = $db->connection->prepare($query);
            if ($stmt->execute([$postText])) {
                // Insertion successful, redirect
                header("Location: /");
                exit(); // Ensure script stops executing after redirection
            } else {
                // Error handling for failed insertion
                echo "Failed to insert post.";
            }
        } else {
            // Input validation failed
            echo "Post text cannot be empty.";
        }
    } else {
        // 'text' field is not set in the POST data
        echo "Post data not received.";
    }
} */