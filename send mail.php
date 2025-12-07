HOW DO I ADD ON XNEELO:<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $to = "admin@lok8it.co.za";
    $subject = "New LOK8IT Signup Submission";

    $title = $_POST['Title'];
    $name = $_POST['Name'];
    $surname = $_POST['Surname'];
    $phone = $_POST['Phone'];
    $email = $_POST['Email'];

    $message = "
    New Signup Received:\n
    Title: $title
    Name: $name
    Surname: $surname
    Phone: $phone
    Email: $email
    ";

    $headers = "From: no-reply@lok8it.co.za\r\n";
    $headers .= "Reply-To: $email\r\n";

    mail($to, $subject, $message, $headers);

    echo "success";
}
?>