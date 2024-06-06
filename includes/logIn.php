<?php
session_start();

require "../Database.php";
include "../functions/functions.php";

$config = require("../config.php");
$db = new Database($config["database"]);


if (isset($_POST["submit"])) {
    $username = $_POST["username"];
    $password = $_POST["password"];

    // Retrieve hashed password from the database based on the provided username
    $query = $db->connection->prepare("SELECT password FROM users WHERE username = ?");
    $query->execute([$username]);
    $hashed_password = $query->fetchColumn();

    if ($hashed_password) {
        // Verify the password using password_verify()
        if (password_verify($password, $hashed_password)) {
            // Password is correct
            $_SESSION["username"] = $username;
            header("Location:/");
            exit(); // Ensure script execution stops after redirect
        }
    }
    // If username or password is incorrect, display error message
    echo "<center><h1>Incorrect Password or Username...!<br></h1></center>";
}


/* if (isset($_POST["submit"])) {
$username = $_POST["username"];
    $password = $_POST["password"];

    $query = $db->connection->prepare("SELECT * FROM users WHERE username=? AND password=?");
    $query->execute(array($username,$password));
    $control=$query->fetch(PDO::FETCH_OBJ);
    if ($control>0) {
        $_SESSION["username"]=$username;
        header("Location:/");
    }
echo "<center><h1>incorrect Password or Email...!<br></h1></center>";
    }  */
 
