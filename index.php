<html>

  <head>
    <title>Site</title>
<link href="style.css" rel="stylesheet">
  </head>

<?php

$connessione = mysqli_connect("localhost","root","root","Registrazioni");

if(!$connessione){
  print "Connection failed";
}

$myquery = "SELECT * FROM Utenti";
$result = mysqli_query($connessione,$myquery);

?>

<body>

<div style="width:100%; height:5%; text-align:center; font-size:20px; margin-top:20px">Benvenuto</div>

<div class="pulsante"><a href="home.php">Home</a></div>

<div class="pulsante"><a href="staff.php">Staff</a></div>

<div class="pulsante"><a href="community.php">Community</a></div>

<div class="pulsante"><a href="battaglia_navale.php">Battaglia Navale</a></div>

<div class="pulsante"><a href="live.php">Live</a></div>

<div style="width:50%; height:10%; margin-top:100px; font-size:20px">Entra a far parte della nostra Community</div>

<form action="memorizza_dati.php" method="post">

<input placeholder="Nome" name="nome">

</br></br>

<input placeholder="Cognome" name="cognome">

</br></br>

<input placeholder="Username" name="username">

</br></br>

<input placeholder="Password" name="password">

</br></br>

Male<input type="radio" name="sesso" value="maschio">
Female<input type="radio" name="sesso" value="femmina">

</br></br>

<input type="submit" nome="registrati" value="Registrati">

</form>

<?php

mysqli_close($connessione);

?>

</body>

</html>
