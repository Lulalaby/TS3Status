<?PHP

# VARIABLEN:
$adresse = ""; // IP oder Hostname
$port = ; // Queryport (Standard: 10011)
# ENDE

$TeamSpeak3Server = @fsockopen ($adresse, $port, $errno, $errstr, 2);

// Statustexte
$Online = echo 'TeamSpeak-Server Online';
$Offline = echo 'TeamSpeak-Server Offline';

// Statusauswertung
$Status = ($TeamSpeak3Server) ? $on : $off;

// Schließen der Verbindung
@fclose ($TeamSpeak3Server);
?>
