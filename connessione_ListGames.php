<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL | E_STRICT);

$connessione = mysqli_connect("localhost","root","root","ListGames");

if(!$connessione){
  print "Connection failed";
}

?>