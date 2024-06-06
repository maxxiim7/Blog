<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign up</title>
    <link rel="stylesheet" href="styles/signIn.css">
</head>
<body>
    <a class="homelink" href="/">Home</a>
<div class="container"> 
    <div class="box form-box"> 
        <header>Sign Up</header>
        <form action="includes/register.php" method="post">
            <div class="field input">
                <label for="name">Name</label>
                <input type="text" name="name" id="name" autocomplete="off" required>
            </div>
            <div class="field input">
                <label for="username">Username</label>
                <input type="text" name="username" id="username" autocomplete="off" required>
            </div>
           
            <div class="field input">
                <label for="password">Password</label>
                <input type="password" name="password" id="password" required>
            </div>
            <div class="field input">
                <label for="password-confirm">Confirm Password</label>
                <input type="password" name="password-confirm" id="password-confirm" required>
            </div>
            
            <div class="field input">
                <label for="age">Age</label>
                <input type="number" name="age" id="age" autocomplete="off" required>
            </div>
            
            <div class="field input">
                <label for="email">Email</label>
                <input type="email" name="email" id="email" autocomplete="off" required>
            </div>  
            
            <div class="field input">
                <input type="submit" class="button" name="submit" value="Sign Up" >
            </div>
            <div class="links">
                Already have an account? <a href="logIn">Log In</a>
            </div>
        </form>
    </div>
</div>
</body>
</html>