<?php
if (isset($_POST['submit'])) {
    $name = $_POST['name']; 
    $mailFrom = $_POST['email'];
    $message = $_POST['message'];

    $mailTo = "fridrich@mapadigital.sk"
    $headers = "From: My website".$mailFrom;
    $txt = "You have received an e-mail from".$name.".\n\n".$message;


    mail($mailTo, $headers, $txt);
    header("Location: index.html?mailsend");

}






?>