<!DOCTYPE html>
<html lang="en">
    <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile</title>
    <link rel="stylesheet" href="styles/style.css"> 
</head>
<body>
<?php require "partials/header.php" ?>
<main>
    <div class="container">
        <?php include "partials/empty.php"?>    
        <?php include "partials/navbarleft.php"?>
        <div class="profilebar">
        <?php if (isset($_SESSION["username"]))    {echo "<h1>My Posts: </h1>";} else {echo "<h2>You need to be logged in to see your Posts</h2>";}?>
            <?php require "getPosts.php"; ?> 
        </div>
        <div class="navbarright">

        </div>
        <?php include "partials/empty.php"?>
    </div>
</main>
</body>
</html>
