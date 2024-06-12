<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];
    
    $to = "harikrishninfoservice@gmail.com";
    $headers = "From: $email \r\n";
    $headers .= "Reply-To: $email \r\n";
    
    mail($to, $subject, $message, $headers);
    
    // Redirect to a thank you page
    header("Location: http://127.0.0.1:5501/index.html");
    exit();
}
?>
