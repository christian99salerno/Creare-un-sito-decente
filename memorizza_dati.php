<?php

$connessione = mysqli_connect("localhost","root","root","Registrazioni");

if(!$connessione){
  print "Connection failed";
}

?>

<?php

$email=$_POST["email"];
$password=md5($_POST["password"]);
$sesso=$_POST["sesso"];

$sql = "INSERT INTO Utenti (EMAIL, PASSWORD, SESSO) VALUES ('$email','$password','$sesso')";

$result=mysqli_query($connessione, $sql);

?>

<?php

mysqli_close($connessione)

?>
