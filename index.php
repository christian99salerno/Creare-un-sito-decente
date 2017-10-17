<html>

  <head>
    <title>Site</title>
<link href="style.css" rel="stylesheet">
</head>


<?php

$connessione = mysqli_connect(localhost,root,root);
$selezione = mysqli_select_db(Games,$connessione);

if(!$connessione) {
   echo "Connection failed";
}

echo "Connected successfully";

$query = mysqli_query("SELECT * FROM list_games_2017");

?>

<body>

<div style="width:100%;height:5%; text-align:center; font-size:20px; padding-top:10px">Benvenuto</div>

<div class="pulsante">Home</div>

<div class="pulsante">Staff</div>

<div class="pulsante">Community</div>

<div class="pulsante">Gamers</div>

<div class="pulsante">Live</div>

<div id="divisione1"></div>

<?php

$dato = mysqli_fetch_assoc()

?>

<div class="divisioni"></div>

<div class="divisioni"></div>

<div class="divisioni"></div>

<div class="divisioni"></div>

<div class="divisioni"></div>

<?php

mysqli_close($connessione);

?>

</body>

</html>
