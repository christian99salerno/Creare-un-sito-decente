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

<div class="container mb-1">

<img src="2.jpg" class="img-fluid" alt="Responsive image">

<div class="row">
<div class="col-6">

<div class="jumbotron mt-1">

<h4>Completa la tua Registrazione</h4>

</div>

</div>
</div>

<div class="row">
<div class="col-6">

<?php

 $email = $_SESSION['email'];

 $sql="SELECT * FROM Utenti WHERE EMAIL='$email'";
 $result=mysqli_query($connessione,$sql);

 $dati=mysqli_fetch_assoc($result);

?>

<!--form-->

<form action="salva_dati.php" method="post">

<input type="hidden" class="form-control" id="ID" value="<?php echo $dati['ID'] ?>" name="ID">

<div class="form-group">

 <label for="nome">Nome</label>
 <input type="text" class="form-control" id="nome" value="<?php echo $dati['NOME'] ?>" name="nome">

</div>

<div class="form-group">

 <label for="cognome">Cognome</label>
 <input type="text" class="form-control" id="cognome" value="<?php echo $dati['COGNOME'] ?>" name="cognome">

</div>

<div class="form-group">

 <label for="username">Username</label>
 <input type="text" class="form-control" id="username" value="<?php echo $dati['USERNAME'] ?>" name="username">

</div>

<div class="form-group">

 <label for="email">Email</label>
 <input type="email" class="form-control" id="email" value="<?php echo $dati['EMAIL'] ?>" name="email">

</div>

<!--checkboxes-->

<?php if($dati['SESSO']=='m'){ ?>

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

<?php } ?>

<?php if($dati['SESSO']=='f'){ ?>

 <div class="form-check">

 <label class="form-check-label">
 <input class="form-check-input" type="radio" name="sesso" id="male" value="m"> Male
 </label>

 </div>

 <div class="form-check">

 <label class="form-check-label">
 <input class="form-check-input" type="radio" name="sesso" id="female" value="f" checked> Female
 </label>

 </div>

<?php } ?>

<?php if(!$dati['SESSO'] == 'm' or !$dati['SESSO'] == 'f') { ?>

 <div class="form-check">

 <label class="form-check-label">
 <input class="form-check-input" type="radio" name="sesso" id="male" value="m"> Male
 </label>

 </div>

 <div class="form-check">

 <label class="form-check-label">
 <input class="form-check-input" type="radio" name="sesso" id="female" value="f"> Female
 </label>

 </div>

<?php } ?>

<!--submit-->

<input type="submit" class="btn btn-primary btn-block" nome="salva" id="save" value="Save">

</form>

</div>

</div>

<?php

require_once("footer.php");

?>
