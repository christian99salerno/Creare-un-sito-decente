<html>

  <head>
    <title>Site</title>
<link href="style.css" rel="stylesheet">
  </head>


<?php

$connessione = mysqli_connect("localhost","root","root","Games");

if(!$connessione){
  print "Connection failed\n";
}

else {
  print "Connected successfully\n";
}


$myquery = "SELECT * FROM list_games_2017";
$result = mysqli_query($connessione,$myquery);

?>

<body>

<div style="width:100%;height:5%; text-align:center; font-size:20px; padding-top:10px">Benvenuto</div>

<div class="pulsante"><a href="home.php">Home</a></div>

<div class="pulsante"><a href="staff.php">Staff</a></div>

<div class="pulsante"><a href="community.php">Community</a></div>

<div class="pulsante"><a href="gamers.php">Gamers</a></div>

<div class="pulsante"><a href="live.php">Live</a></div>

<div style="float:left; width:50%; height:50%; margin-top:20px">



<table border="1px" solid="000000">

    <tr>
      <td>TITOLO</td><td>GENERE</td><td>USCITA</td><td>PIATTAFORMA</td>
    </tr>

    <?php $dati = mysqli_fetch_assoc($result); ?>

    <tr>
      <td><?php echo $dati["TITOLO"]; ?></td>
      <td><?php echo $dati["GENERE"]; ?></td>
      <td><?php echo $dati["USCITA"]; ?></td>
      <td><?php echo $dati["PIATTAFORMA"]; ?></td>
    </tr>

    <?php $dati = mysqli_fetch_assoc($result); ?>

    <tr>
      <td><?php echo $dati["TITOLO"]; ?></td>
      <td><?php echo $dati["GENERE"]; ?></td>
      <td><?php echo $dati["USCITA"]; ?></td>
      <td><?php echo $dati["PIATTAFORMA"]; ?></td>
    </tr>

</table>

</div>

<?php

mysqli_close($connessione);

?>

</body>

</html>
