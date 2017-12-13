<?php

$connessione = mysqli_connect("localhost","root","root","Registrazioni");

if(!$connessione){
  print "Connection failed";
}

?>

<?php

$id=$_POST["ID"];
$nome=$_POST["nome"];
$cognome=$_POST["cognome"];
$username=$_POST["username"];
$email=$_POST["email"];
$sesso=$_POST["sesso"];


$sql = "UPDATE Utenti SET NOME='$nome', COGNOME='$cognome', USERNAME='$username', EMAIL='$email', SESSO='$sesso' WHERE ID='$id'";


$result=mysqli_query($connessione, $sql);

?>

<?php

  #header("Location: profile.php");

?>
