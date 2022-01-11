<?php

if(isset($_POST['submit'])){
    $firstName = $_POST['firstName'];
    $lastName = $_POST['lastName'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    $mailTo="email address here"
    $headers = "From my website: ".$mailFrom;
    $txt="You have received an e-mail from ".$firstName" " .$lastName".\n\n"

    mail($mailTo,$txt,$headers);
    header("Location: index.html?mailsend");
}



?>