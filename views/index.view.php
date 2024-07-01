
<!DOCTYPE html>
<html lang="en">
    <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="styles/style.css">
</head>
<body>
<?php require "partials/header.php" ?>
<main>
    <div class="container">
        <?php include "partials/empty.php"?>
        <?php include "partials/navbarleft.php"?>
       
        <div class="mainbar">
            <div class="postbox">
              <?php if(isset($_SESSION["username"])) 
                {echo  '<form action="../createpost.php" method="post" enctype="multipart/form-data">
                <textarea id="text" name="text" rows="3" placeholder="Say something..."></textarea> 	
                <label for="file-upload" class="imgUpload"><img class="uploadPicture" src="img/picUpload.png" alt="uploadpic"></label>
                <input  type="file" id="file-upload" name="userImage">
                <input class="submitpost" type="submit" value="Post" /> </form>'
                ;}
                ?>
            </div>

            <?php include "database/posts.php"; ?>
        </div>
        
        <div class="navbarright">
                <ul>
                    <h2>News</h2>
                    <?php include "News.php"; ?>
                </ul>
        </div>

            <?php include "partials/empty.php"?>
    </div>
</main>

</body>
</html>