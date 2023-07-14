<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $password = $_POST["password"];

    $data = "Nome: " . $name . "\n" . "Email: " . $email . "\n" . "Password: " . $password . "\n";

    // Salva i dati nel file di testo
    file_put_contents("registrazioni.txt", $data, FILE_APPEND | LOCK_EX);

    // Reindirizza l'utente a una pagina di conferma o di successo
    header("Location: conferma.html");
    exit;
}
?>
