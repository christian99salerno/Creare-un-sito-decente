<?php
require_once("header.php");
?>

<?php
 session_start();
 if($_SESSION["autorized"]==0)
 {
    Header( "Location:index.php" );
 }
?>

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

<!--checkboxes-->

<div class="form-check">

  <label class="form-check-label">
    <input class="form-check-input" type="radio" name="sesso" id="male" value="m" checked> Male
  </label>

</div>

<div class="form-check">

  <label class="form-check-label">
    <input class="form-check-input" type="radio" name="sesso" id="female" value="f"> Female

  </label>

</div>


<!--submit-->

<input type="submit" class="btn btn-primary btn-block" nome="aggiorna" id="update" value="Update">

</form>




</div>

</div>

<?php
require_once("footer.php");
?>
