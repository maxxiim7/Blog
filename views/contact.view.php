<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact</title>
    <link rel="stylesheet" href="styles/style.css">
</head>

<body>
    <?php require "partials/header.php" ?>
    <main>
        <div class="container">
            <?php include "partials/empty.php" ?>
            <?php include "partials/navbarleft.php" ?>
            <div class="mainbar">
                <h1>Contact Us !</h1>
                <form action="" method="POST">
                    <div class="contactContainer">
                        <input class="userData" type="text" name="name" placeholder="Name" required>
                        <input class="userData" type="text" name="surname" placeholder="Surname" required>
                    </div>
                    <div class="contactContainer">
                        <input class="userData" type="text" name="email" placeholder="Email" required>
                        <input class="userData" type="tel" name="mobile" placeholder="mobile">
                    </div>
                    <div class="contactTextarea">
                    <textarea name="message" class="contactMessage" id="auto-resize" placeholder="Write ur message here..."></textarea>
                    </div>
                    <div class="centerBtnx">
                        <input class="submitBtn" type="submit" value="Submit">
                    </div>
                </form>
            </div>
            <div class="navbarright">
            </div>
            <?php include "partials/empty.php" ?>
        </div>
    <script> 
        const textarea = document.getElementById('auto-resize');

        textarea.addEventListener('input', autoResize);

        function autoResize() {
            this.style.height = 'auto'; // Reset the height
            this.style.height = this.scrollHeight + 'px'; // Set the height to the scroll height
                                }
    </script>
        </main>
</body>

</html>