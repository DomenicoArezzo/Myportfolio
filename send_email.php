<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    // Validazione dei dati (opzionale)
    // Esempio: verifica che i campi siano stati compilati correttamente

    // Destinatario dell'email
    $to = 'domenicoarezzo95@gmail.com';
    $subject = 'Nuovo messaggio dal form di contatto';
    $body = "Nome: $name\n\nEmail: $email\n\nMessaggio:\n$message";

    // Intestazioni per l'email
    $headers = "From: $email";

    // Invia l'email
    if (mail($to, $subject, $body, $headers)) {
        // Email inviata con successo
        echo '<p>Il tuo messaggio è stato inviato con successo. Grazie!</p>';
    } else {
        // Errore nell'invio dell'email
        echo '<p>Si è verificato un errore durante l\'invio del messaggio. Riprova più tardi.</p>';
    }
} else {
    // Se il metodo di richiesta non è POST, gestire di conseguenza
    echo '<p>Errore: Il form non è stato inviato correttamente.</p>';
}
?>
