<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Log In</title>
    <link rel="stylesheet" href="styles/signIn.css">
</head>
<body>
    <a class="homelink" href="/">Home</a>
<div class="container"> 
    <div class="box form-box"> 
        <header>Login</header>
        <form action="includes/logIn.php" method="post">
            <div class="field input">
                <label for="username">Username</label>
                <input type="text" name="username" id="username" autocomplete="off" placeholder="Enter your Username" required>
            </div>
           
            <div class="field input">
                <label for="password">Password</label>
                <input type="password" name="password" id="password" autocomplete="off" placeholder="Enter your Password" required>
            </div>
           
            <div class="field input">
                <input type="submit" class="button" name="submit" value="Login" required>
            </div>
            
            <div class="links">
                Don't have an account? <a href="signUp">Sign up</a>
            </div>

        </form>
    </div>
</div>
</body>
</html>