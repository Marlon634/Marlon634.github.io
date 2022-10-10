<?php
$vorname = $_POST['Vorname'];
$nachname = $_POST['Nachname'];
$emailadresse = $_POST['E-mail'];
$sonstigesfragen = $_POST['Text/Fragen'];

$email_from = 'info@123test.com';
    
$email_subject = 'NewFormSubnission';
    
$email_body = "User Vorname: $vorname.\n". 
               "User Nachname: $nachname.\n".
               "User Nachname: $emailadresse.\n".
               "User Nachname: $sonstigesfragen.\n";
               
    
    
$to = 'wildmarlon26@gmail.com';
    
$headers = "From: $email_form \r\n"; 

$headers .="Reply-To: $visitor_email \r\n";

mail($to,$email_subject,$email_body,$headers);

header("Location: index.html")

?>
    
    
    
    