<?php

require_once("header.php");

?>

<?php
 if($_SESSION["autorized"]==0)
 {
    Header( "Location:index.php" );
 }
?>

<div class="container-fluid">

<div class="row backgroundProfile">
<div class="col-6">

<div class="jumbotron mt-5 text-light trasparenzaProfile">

<h2>Completa la tua Registrazione</h2>

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

 <div class="row">
 <div class="col-3 offset-3">

 <div class="form-check">

 <input class="form-check-input" type="radio" name="sesso"
 id="male" value="m" <?php if($dati['SESSO']=='m') echo 'checked'; ?>>
 <label class="form-check-label" for"male">Male</label>

 </div>

 </div> 

 <div class="col-3">

 <div class="form-check">

 <input class="form-check-input" type="radio" name="sesso"
 id="female" value="f" <?php if($dati['SESSO']=='f') echo 'checked'; ?>>
 <label class="form-check-label" for="female">Female</label>

 </div>

 </div>
 </div>

<!--submit-->

<input type="submit" class="btn btn-primary btn-block" nome="salva" id="save" value="Save">

</form>

</div>

</div>
</div>

</div>

<?php

require_once("footer.php");

?>
