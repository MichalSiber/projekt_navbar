<?php
$servername = "localhost"; 
$username = "root";
$password = "80@N3m4mr4dIT#";
$dbname = "animanga";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Připojení k databázi selhalo: " . $conn->connect_error);
}
echo "Připojení bylo úspěšné!";
?>
