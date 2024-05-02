<?php
if ($_SERVER["REQUEST_METHOD"] == "GET") 
{
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];
    
    // E-Mail-Adresse, an die die Nachricht gesendet werden soll
    $empfaenger = "alequaglia.2006@gmail.com";
    
    // Betreff der E-Mail
    $betreff = "Neue Nachricht von $name";
    
    // Nachrichteninhalt
    $nachricht = "Name: $name\n";
    $nachricht .= "E-Mail: $email\n";
    $nachricht .= "Nachricht:\n$message";
    
    // E-Mail versenden
    mail($empfaenger, $betreff, $nachricht);
    
    // Bestätigung an den Benutzer senden
    echo "Vielen Dank! Ihre Nachricht wurde erfolgreich gesendet.";
} 

else 
{
    // Wenn das Skript nicht über ein Formular aufgerufen wird, Fehlermeldung ausgeben
    echo "Ein Fehler ist aufgetreten. Bitte versuchen Sie es später erneut.";
}
