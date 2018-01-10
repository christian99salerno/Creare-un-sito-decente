<?php

require_once("connessione.php");

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
