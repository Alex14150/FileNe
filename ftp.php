<?php
$server = "2.44.3.11";
$username = "francesco";
$password = "Alessandro_1";

// Stabilisci una connessione FTP
$ftpConnection = ftp_connect($server);
if ($ftpConnection) {
    // Effettua il login con le credenziali
    $login = ftp_login($ftpConnection, $username, $password);
    if ($login) {
        // Operazioni FTP
        // Esempio: Ottieni l'elenco dei file nella directory corrente
        $fileList = ftp_nlist($ftpConnection, ".");
        if ($fileList) {
            echo "File presenti sul server FTP:<br>";
            foreach ($fileList as $file) {
                echo $file . "<br>";
            }
        } else {
            echo "Nessun file presente sul server FTP.";
        }
        
        // Chiudi la connessione FTP
        ftp_close($ftpConnection);
    } else {
        echo "Impossibile effettuare il login FTP.";
    }
} else {
    echo "Impossibile connettersi al server FTP.";
}
?>
