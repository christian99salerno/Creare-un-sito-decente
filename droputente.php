<?php

require_once("connessione.php");

$ID=$_POST["ID"];

$sql="DELETE FROM Utenti WHERE ID = '$ID'";
$result=mysqli_query($connessione,$sql);


?>
