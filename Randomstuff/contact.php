<?php
if(isset($_POST['submit'])){
    $name = $$_POST['name'];
    $mail = $$_POST['mail'];
    $stuff = $$_POST['stuff'];



    $MailTo = "info@yohello.ca";
    $headers = "From: Website". $mail;
    $subject = "subject";
    $txt = "You have gotten a message from: ".$name.".\n\n".$message;

    mail("info@yohello.ca", "testing php mail", "Body of test php mail() function");
    header("Location:../index.php?mailsend");
}
?>