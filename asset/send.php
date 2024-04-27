<?php
$name = $_post['name'];
$visitor_email = $_post['email'];
$message = $_post['message'];
$email_from = "info@web.com";
if (!preg_match(
"/ ^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/i",
$visitor_email)
{
    $errors .= "\n Error: Invalid email address";
}
$email_subject = "New From Submission";
$email_body = "userName: $name./n";
              "useremail: $visitor_email./n";
              "usermessage: $message./n";
$to = "kgramon6956@gmail.com";
$headers = "from: $email_from\r\n";
$headers = "reply-to: $visitors_email\r\n";
mail($to, $email_subject, $email_body, $headers);
header("Location: jur.html");



?>