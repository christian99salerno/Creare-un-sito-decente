<?php

$connessione = mysqli_connect("localhost","root","root","Registrazioni");

if(!$connessione){
  print "Connection failed";
}

$myquery = "SELECT * FROM Utenti";
$result = mysqli_query($connessione,$myquery);

?>

<?php
echo $_POST["nome"];
echo $_POST["cognome"];
echo $_POST["username"];
echo $_POST["password"];
echo $_POST["sesso"];
?>
