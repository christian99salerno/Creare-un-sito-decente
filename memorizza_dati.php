<?php

$connessione = mysqli_connect("localhost","root","root","Registrazioni");

if(!$connessione){
  print "Connection failed";
}

?>

<?php

$email=$_POST["email"];
$password=md5($_POST["password"]);

$sql = "INSERT INTO Utenti (EMAIL, PASSWORD) VALUES ('$email','$password')";

$result=mysqli_query($connessione, $sql);

?>

<?php

  header("Location: index.php");

?>
