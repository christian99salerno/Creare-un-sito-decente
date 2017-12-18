<?php

#ini_set('display_errors', 1);
#ini_set('display_startup_errors', 1);
#error_reporting(E_ALL | E_STRICT);

$connessione = mysqli_connect("localhost","root","root","Registrazioni");

if(!$connessione){
  print "Connection failed";
}

?>

<?php

$id=$_POST["ID"];
$nome=$_POST["nome"] or "";
$cognome=$_POST["cognome"] or "";
$username=$_POST["username"] or "";
$email=$_POST["email"] or "";
$sesso=$_POST["sesso"] or "";

if($nome){
$c1=" NOME='$nome',";
} else{
  $c1="";
  }

if($cognome){
$c2=" COGNOME='$cognome',";
} else{
  $c2="";
  }

if($username){
$c3=" USERNAME='$username',";
} else{
  $c3="";
  }

if($email){
$c4=" EMAIL='$email'";
} else{
  $c4="";
  }

if($sesso){
$c5=", SESSO='$sesso'";
} else{
  $c5="";
  }

$sql = "UPDATE Utenti SET".$c1.$c2.$c3.$c4.$c5." WHERE ID='$id'";

$result=mysqli_query($connessione, $sql);

?>

<?php

  header("Location: profile.php");

?>
