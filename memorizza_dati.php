<?php

$connessione = mysqli_connect("localhost","root","root","Registrazioni");

if(!$connessione){
  print "Connection failed";
}

?>

<?php

$nome=$_POST["nome"];
$cognome=$_POST["cognome"];
$username=$_POST["username"];
$email=$_POST["email"];
$password=md5($_POST["password"]);
$sesso=$_POST["sesso"];

$sql = "INSERT INTO Utenti (NOME, COGNOME, USERNAME, EMAIL, PASSWORD, SESSO)VALUES ('$nome','$cognome','$username','$email','$password','$sesso)";

$result=mysqli_query($sql);

?>

<?php

mysqli_close($connessione)

?>
