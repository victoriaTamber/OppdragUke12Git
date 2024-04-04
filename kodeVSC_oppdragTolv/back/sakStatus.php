<!-- Pusher ut sak informasjon -->
<?php
include("../db_kobling.php");

$sakId = $_POST['sakNr'];

$sql = "SELECT * FROM tickets WHERE sakNr = '?'";
$result = mysqli_query($conn, $sql);

if (!isset($_GET['sakNr'])) {
    exit('No ID specified!');
}

//pusher
echo "Ticket ID: " . $ticket['sakNr'] . "<br>";
echo "Tittel: " . $ticket['title'] . "<br>";
echo "Beskrivelse: " . $ticket['description'] . "<br>";
?>