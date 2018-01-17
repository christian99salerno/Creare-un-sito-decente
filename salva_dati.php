<?php

require_once("connessione.php");

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

if(!$email==$_SESSION['email']) {

$check=1;

}

$result=mysqli_query($connessione, $sql);

if(!$check==1)

require_once("logout.php");

else{

  header("Location: profile.php");

}

?>
