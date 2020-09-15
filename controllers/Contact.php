<?php

if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $Name= $_POST['Name'];
    $sub= "Message from $Name";
    $mail= $_POST['email'];
    $msg= $_POST['Message'];

    $To= "khadija.zerzkhane98@gmail.com";
    $headers= "From: $mail\r\n";
    $txt= "you have recived an email $Name"."\n\n"."$msg";


    mail($To, $sub, $msg, $headers);
    header("Location: ../views/Admin.php");
}
?>