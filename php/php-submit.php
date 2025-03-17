<?php
$nazev = $_POST['nazev'];
$datum_vydani = $_POST['datum_vydani'];
$zanr = $_POST['zanr'];


$sql = "INSERT INTO anime ('nazev', 'datum_vydani', 'zanr') VALUES ( '$nazev', '$datum_vydani', '$zanr')";

if ($conn->query($sql) === TRUE) {
    echo "Data byla úspěšně uložena!";
  } else {
    echo "Chyba: " . $sql . "<br>" . $conn->error;
  }
  
  $conn->close();
?>
