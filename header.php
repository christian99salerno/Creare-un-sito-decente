<?php

require_once("connessione.php");

  session_start();

?>

<!DOCTYPE html>

<html>

<head>

<title>Site</title>

<link rel="stylesheet" href="bootstrap.min.css">

<link rel="stylesheet" href="animate.css">

<link rel="stylesheet" href="style.css">

<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">

<script src="jquery-3.2.1.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>

<script src="bootstrap.min.js"></script>

</head>

<body>

<!-- navigation bar -->

<nav class="navbar navbar-expand-lg navbar-light bg-light">

<a class="navbar-brand animated bounceInRight" href="index.php">Forever Gamers</a>

<button class="navbar-toggler" type="button" data-toggle="collapse"
data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
aria-expanded="false" aria-label="Toggle navigation">

<span class="navbar-toggler-icon"></span>

</button>

<div class="collapse navbar-collapse" id="navbarSupportedContent">

<ul class="navbar-nav mr-auto">

  <li class="nav-item active">
    <a class="nav-link"
    href="index.php">Home<span class="sr-only">(current)</span></a>
  </li>

  <li class="nav-item">
    <a class="nav-link" href="games.php">Games</a>
  </li>

  <li class="nav-item">
    <a class="nav-link" href="community.php">Community</a>
  </li>

  <li class="nav-item">
    <a class="nav-link" href="battaglia_navale.php">Battaglia Navale</a>
  </li>

  <li class="nav-item">
    <a class="nav-link" href="staff.php">Staff</a>
  </li>

</ul>
  

<!--registrazione-->

<ul class="navbar-nav">
  
<?php

  if(!$_SESSION["autorized"]==1){ ?>
 
  <li class="nav-item">
    <a class="nav-link" href="registrazione.php">
    <i class="fa fa-user-plus" aria-hidden="true"></i>Registrazione
    </a>
  </li>

<?php } ?>
  
<!--Amministratore Utenti

 <li class="nav-item">
   <a class="nav-link" href="utenti.html">Admin</a>
 </li> -->

<!--profile-->

<?php

 if($_SESSION["autorized"]==1){ ?>
   <li class="nav-item dropdown">
       <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" 
       data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
       <i class="fa fa-user-circle-o"></i> Ciao <?php if ($_SESSION["nome"]) { 
                                                         echo $_SESSION['nome']; }
                                                      else { 
                                                         echo $_SESSION['email']; }?>
       </a>
        
   <div class="dropdown-menu" aria-labelledby="navbarDropdown">
       <a class="dropdown-item" href="profile.php">Profile</a>
          
   <div class="dropdown-divider"></div>
       <div class="dropdown-item">
    <form action="logout.php" method="post">
    <input class="btn btn-danger" type="submit" name="uscita" id="logout" value="Logout">
    </form>
   </div>
    
   </div>
    
   </li>
 <?php } ?>
</ul>

<!-- search bar

<form class="form-inline my-2 my-lg-0">

<input class="form-control mr-sm-2" type="search" 
placeholder="Search" aria-label="Search">

<button class="btn btn-outline-success my-2 my-sm-0"
type="submit">Search</button>

</form>

end search bar -->

</div>

</nav> <!-- end navigation bar -->
