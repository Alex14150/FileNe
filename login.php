<?php
// Connessione al database
$servername = "nome_host";
$username = "nome_utente";
$password = "password";
$dbname = "nome_database";
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connessione al database fallita: " . $conn->connect_error);
}

// Recupero dei dati inviati dal form di login
$username = $_POST['username'];
$password = $_POST['password'];

// Query per verificare le credenziali dell'utente
$sql = "SELECT * FROM utenti WHERE username = '$username' AND password = '$password'";
$result = $conn->query($sql);

if ($result->num_rows == 1) {
    // Credenziali corrette, autenticazione riuscita
    session_start();
    $_SESSION['username'] = $username;
    header("Location: home.php"); // Reindirizzamento alla home page o a una pagina protetta
} else {
    // Credenziali errate, autenticazione fallita
    echo "Username o password errati.";
}

$conn->close();
?>
