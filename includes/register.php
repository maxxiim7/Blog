<?php

require "../Database.php"; 

// $config = require ("../config.php");
//$db = new Database($config["database"]);

$host = "localhost";
$dbname = "myapp";


try {
    //$pdo = new Database($config["database"]);
    $pdo = new PDO("mysql:host=$host;dbname=$dbname", "root", "");
    $stmt = $pdo->prepare("INSERT INTO users (name,username,password,age,email) VALUES (:name, :username, :password, :age, :email)");

    if(isset($_POST["submit"])) {
        $error = false;
        $name = $_POST["name"];
        $username = $_POST["username"];
        $password = $_POST["password"];
        $passwordConfirm = $_POST["password-confirm"];
        $age = $_POST["age"];
        $email = $_POST["email"];
        

        if(!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            echo "Please enter a valid Email! <br>";
            $error = true;
        }
        if(strlen($password) == 0) {
            echo "Please enter a Password! <br>";
            $error = true;
        }
        if($password != $passwordConfirm) {
            echo "Passwords do not match! <br>";
            $error = true;
        }
        if($age <= 13 ) {
            echo "You must be older to view this Page!";
            $error = true;
        }
        if (!$error) {
            $hashedPassword = password_hash($password, PASSWORD_DEFAULT);
        }
    }

    $stmt->bindParam(":name", $name);
    $stmt->bindParam(":username", $username);
    $stmt->bindParam(":password", $hashedPassword);
    $stmt->bindParam(":age", $age);
    $stmt->bindParam(":email", $email);

    $stmt->execute();
    
    echo 'User successfully registered!<a href="/logIn">Click here to Log in</a> ';
}   catch(PDOException $e) {
    echo "ERROR: ". $e->getMessage();
}





/* if(isset($_POST["submit"])) {
    $error = false;
    $name = $_POST["name"];
    $username = $_POST["username"];
    $password = $_POST["password"];
    $passwordConfirm = $_POST["password-confirm"];
    $age = $_POST["age"];
    $email = $_POST["email"];
    
    if(!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo "Please enter a valid Email! <br>";
        $error = true;
    }
    if(strlen($password) == 0) {
        echo "Please enter a Password! <br>";
        $error = true;
    }
    if($password != $passwordConfirm) {
        echo "Passwords do not match! <br>";
        $error = true;
    }
    if($age <= 13 ) {
        echo "You must be older to view this Page!";
        $error = true;
    }
    
    if(!$error) {
        $statement = $db->prepare("SELECT * FROM users WHERE email = :email");
        $result = $statement->execute();
        $user = $statement->fetch(); 
        $query = "SELECT * FROM users WHERE email = :email";
        $user = $db->query($query,array("email"=>$email))->fetchAll();
        
        if($user !== false) {
            echo "Email already used! <br>";
            $error = true;
        } 
    }
    if (!$error) {
        $hashed_password = password_hash($password, PASSWORD_DEFAULT);
        
        $statement = $db->prepare("INSERT INTO users (email,password) VALUES (:email, :password)");
        $result = $statement->execute(array("email"=>$email, ":password" =>$hashed_password));
        
        if ($result) {
            echo 'You are successfully signed up!. <a href="logIn-view.php">Log In</a>';
        } else {
            echo "Something went wrong while signing you up! <br>";
        }
    }  */
