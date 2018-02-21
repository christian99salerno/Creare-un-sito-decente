<?php

require_once("connessione_ListGames.php");

$sql="SELECT list_games.ID, list_games.TITOLO, list_types.NOME as GENERE, list_games.DATA, list_platforms.NOME as PIATTAFORMA, list_developers.NOME as SVILUPPATORE FROM `list_games` join list_types on list_types.id = list_games.ID_GENERE join list_platforms on list_platforms.id = list_games.ID_PIATTAFORMA join list_developers on list_developers.id = list_games.id_SVILUPPATORE";

$result=mysqli_query($connessione,$sql);

$json = [];

#echo "[";
while ( $dati=mysqli_fetch_assoc($result) ) {
  $str = "";
  $str .= "{";
  $str .= '"ID": "' . $dati["ID"] . '",';
  $str .= '"Titolo": "' . $dati["TITOLO"] . '",';
  $str .= '"Genere": "' . $dati["GENERE"] . '",';
  $str .= '"Data": "' . $dati["DATA"] . '",';
  $str .= '"Piattaforma": "' . $dati["PIATTAFORMA"] . '",';
  $str .= '"Sviluppatore": "' . $dati["SVILUPPATORE"] . '"';
  #print_r($dati);
  $str .= "}";
  array_push($json, $str);
}
#echo "]";
echo '[' . join($json, ',') . ']';
?>
