<html>

<head>

<title>Profile</title>

<link rel="stylesheet" href="bootstrap.min.css">

<script src="jquery-3.2.1.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>

<script src="bootstrap.min.js"></script>

</head>

<body>

<!--connessione al database per il login -->

<php

  $connessione = mysqli_connect("localhost","root","root","Registrazioni");

  if(!$connessione){
    print "Connection failed";
  }

?>

<!-- apertura della sessione per loggarsi -->

<?php

session_start();

$email = $_POST["email"];
$password = md5($_POST["password"]);

$sql="SELECT EMAIL,PASSWORD FROM Utenti WHERE (EMAIL='$email' AND PASSWORD='$password')";

$result_temp = mysqli_query($connessione,$sql);

$dati = mysqli_fetch_assoc($result_temp);

if (($dati['EMAIL'] == $email)&&($dati['PASSWORD']==$password))
        {
$_SESSION["email"]=$email;
$_SESSION["password"]=$password;
$_SESSION["autorized"]=1;
Header("Location:profile.php");
exit;
        }
else{
    $_SESSION["autorized"]=0; //errore e quindi autorizzazione negata
        }
?>

<!--navigation bar-->

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
<a class="nav-link" href="games.php">Games</a>
      </li>

    </ul>

<!--search bar-->

<form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>

    </form> <!--close search bar-->

  </div>

</nav> <!--close navigation bar-->

<div class="container">

<img src="2.jpeg" class="img-fluid" alt="Responsive image">

<div class="row">
<div class="col-6">

<div class="jumbotron">

<h4>Completa la tua Registrazione</h4>

</div>

</div>
</div>

<div class="row">
<div class="col-6">

<!--form-->

<form action="change_profile.php" method="post">

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

<!--submit-->

<input type="submit" class="btn btn-primary btn-block" nome="aggiorna" id="update" value="Update">

</form>

<form action="logout.php" method="post">

<input type="submit" class="btn btn-primary btn-block" nome="uscita" id="logout" value="Logout">

</form>

</div>

</div>


</body>

</html>
