<?php 

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'vendor/autoload.php';

if($_SERVER["REQUEST_METHOD"] == "POST") {
    
    $contactUserName = htmlspecialchars($_POST["name"]);
    $contactUserSurName = htmlspecialchars($_POST["surname"]);
    $contactEmail = htmlspecialchars($_POST["email"]);
    $contactMobile = $_POST["mobile"];
    $contactMessage = htmlspecialchars($_POST["message"]);

$mail = new PHPMailer();
$mail->isSMTP();
$mail->Host =  "smtp.gmail.com";
$mail->SMTPAuth = true;
$mail->Username = "hazyhmaxim@gmail.com";
$mail->Password = "wiht ixjj toko gblg";

$mail->setFrom($contactEmail,$contactUserName ." ". $contactUserSurName);
$mail->addAddress("hazyhmaxim@gmail.com","Maxim");

$mail->Subject ="Test";
$mail->Body = $contactMessage;
if($mail->send()) {
    echo "Message sent successfully!";
} else { 
    "There was an error sending ur Message." .$mail->ErrorInfo;
}

} 

