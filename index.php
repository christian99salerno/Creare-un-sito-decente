<?php

require_once("header.php");

?>

<div class="container-fluid mt-2">

<div class="row header">
<div class="col-6">

<h3>Benvenuto</h3>
<p>
Divertiti in questo sito per appassionati videogiocatori.</br>
Registrati ed entra a far parte di una grande community che condivide</br>
le tue stesse passioni.</br>
Cerca i videogiochi che più ti piacciono ed informati sulle loro</br>
caratteristiche e sul loro modo di stupire i giocatori</br>
che vi si avvicinano.</br>
Vota i tuoi preferiti e parla di loro con altri utenti iscritti</br> 
al sito nelle discussioni.</br>
Non smettere mai di vivere avventure nel mondo dei</br>
videogames.
</p>

</div>
</div>

<div class="row">
<div class="col-6">

<!--login-->

<?php if(!$_SESSION["autorized"]==1){ ?>

<div class="jumbotron mt-5 bg-dark">

<h2 class=text-success>Login</h2>

<form action="login.php" method="post">

<div class="form-group">

<label class="text-light" for="email">Email</label>
<input type="email" class="form-control" id="email"
placeholder="E-mail" name="email">

</div>

<div class="form-group">

<label class="text-light" for="password">Password</label>
<input type="password" class="form-control" id="password"
placeholder="Password" name="password">

</div>

<!--submit-->

<input type="submit" class="btn btn-success btn-block"
nome="accedi" id="Login" value="Login">

</form>

</div>

<?php } ?>





</div>
</div>

</div>

<?php

require_once("footer.php");

?>
