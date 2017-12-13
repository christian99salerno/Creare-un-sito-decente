<?php

require_once("connessione.php");

$sql="SELECT * FROM Utenti";
$result=mysqli_query($connessione,$sql);

$json = [];

#echo "[";
while ( $dati=mysqli_fetch_assoc($result) ) {
  $str = "";
  $str .= "{";
  $str .= '"ID": "' . $dati["ID"] . '",';
  $str .= '"NOME": "' . $dati["NOME"] . '",';
  $str .= '"COGNOME": "' . $dati["COGNOME"] . '",';
  $str .= '"USERNAME": "' . $dati["USERNAME"] . '",';
  $str .= '"EMAIL": "' . $dati["EMAIL"] . '",';
  $str .= '"PASSWORD": "' . $dati["PASSWORD"] . '",';
  $str .= '"SESSO": "' . $dati["SESSO"] . '"';
  #print_r($dati);
  $str .= "}";
  array_push($json, $str);
}
#echo "]";
echo '[' . join($json, ',') . ']';
?>
