<?php
if (isset($_POST['submit'])) {
    // $name =  $_POST['name'];
    // $mail =  $_POST['mail'];
    // $stuff = $_POST['stuff'];



    // $MailTo = "not going to dox";
    // $headers = "From: Website" . $mail;
    // $subject = "subject";
    // $txt = "You have gotten a message from: " . $name . ".\n\n" . $stuff;

    // mail("info@yohello.ca", "testing php mail", "Body of test php mail() function");
    // // header("Location:../index.php?mailsend");
 
$to_email = 'info@yohello.ca';
$subject = 'Testing PHP Mail';
$message = 'This mail is sent using the PHP mail function';
$headers = 'From: noreply@company.com';
mail($to_email,$subject,$message,$headers);
}
