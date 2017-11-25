<html>

<head>

<title>Site</title>

<link rel="stylesheet" href="bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">

<script src="jquery-3.2.1.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
<script src="bootstrap.min.js"></script>

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

<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">Forever Gamers</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="staff.php">Staff</a>
      </li>
      <li class="nav-item">
<a class="nav-link" href="community.php">Community</a>
      </li>
      <li class="nav-item">
<a class="nav-link" href="battaglia_navale.php">Battaglia Navale</a>
      </li>
      <li class="nav-item">
<a class="nav-link" href="live.php">Live</a>
      </li>
      
      
    </ul>
  </div>
</nav>

<div class="container">

<div class="row justify-content-center">
<div class="col-6">
<div class="jumbotron">
  <h4 class="text-center">Entra a far parte della nostra Community</h4>
</div>
</div>
</div>

<div class="row justify-content-center">
<div class="col-6">
<form action="memorizza_dati.php" method="post">

<div class="form-group">
 
 <label for="nome">Nome</label>
 <input type="text" class="form-control" id="nome" placeholder="Nome" name="nome">

</div>

<div class="form-group">
 
 <label for="cognome">Cognome</label>
 <input type="text" class="form-control" id="cognome" placeholder="Cognome" name="cognome">

</div>

<div class="form-group">
 
 <label for="username">Username</label>
 <input type="text" class="form-control" id="username" placeholder="Username" name="username">

</div>

<div class="form-group">

<label for="password">Password</label>
<input type="password" class="form-control" id="password" placeholder="Password" name="password">

</div>

Male<input type="radio" name="sesso" value="maschio">
Female<input type="radio" name="sesso" value="femmina">

<input type="submit" class="btn btn-primary btn-block" nome="registrati" value="Registrati">

</form>
</div>
</div>
<?php

mysqli_close($connessione);

?>

</div>

</body>

</html>
