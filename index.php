<?php

require_once("header.php");

?>

<div class="container-fluid mt-2">

<div class="row justify-content-center header">
<div class="col-8">

<div class="jumbotron mt-5 trasparenza text-light text-center">

<h1 class="display-4 text-center">Benvenuto</h1>

<p class="lead">
Divertiti in questo sito per appassionati videogiocatori.
Registrati ed entra a far parte di una grande community che condivide
le tue stesse passioni.</p>

<p class="lead">
Cerca i videogiochi che più ti piacciono ed informati sulle loro
caratteristiche e sul loro modo di stupire i giocatori
che vi si avvicinano.</p>

<p class="lead">
Vota i tuoi preferiti e parla di loro con altri utenti iscritti
al sito nelle discussioni.
Non smettere mai di vivere avventure nel mondo dei
videogames.</p>

</div>

</div>
</div>

<hr>

<div class="row zelda">
<div class="col-12 px-0">

<div class="card" style="z-index:10; margin-top:18rem; margin-left:18rem; width:18rem;">
<img class="card-img-top" src="g1.jpg">
<div class="card-body">
<h3 class="card-title">Zelda</h3>
<h3>Zelda</h3>
<h3>Zelda</h3>
<h3>Zelda</h3>
<h3>Zelda</h3>
<h3>Zelda</h3>
<h3>Zelda</h3>
<h3>Zelda</h3>
<h3>Zelda</h3>
<h3>Zelda</h3>
<h3>Zelda</h3>
</div>
</div>

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
