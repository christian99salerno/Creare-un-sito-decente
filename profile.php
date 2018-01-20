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

<div class="container mt-2">

<img src="2.jpg" class="img-fluid" alt="Responsive image">

<div class="row">
<div class="col-6">

<div class="jumbotron mt-5 bg-dark">

<h2 class="text-success">Completa la tua Registrazione</h2>

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

 <label class="text-light" for="nome">Nome</label>
 <input type="text" class="form-control" id="nome" value="<?php echo $dati['NOME'] ?>" name="nome">

</div>

<div class="form-group">

 <label class="text-light" for="cognome">Cognome</label>
 <input type="text" class="form-control" id="cognome" value="<?php echo $dati['COGNOME'] ?>" name="cognome">

</div>

<div class="form-group">

 <label class="text-light" for="username">Username</label>
 <input type="text" class="form-control" id="username" value="<?php echo $dati['USERNAME'] ?>" name="username">

</div>

<div class="form-group">

 <label class="text-light" for="email">Email</label>
 <input type="email" class="form-control" id="email" value="<?php echo $dati['EMAIL'] ?>" name="email">

</div>

<!--checkboxes-->

 <div class="row">
 <div class="col-3 offset-3">

 <div class="form-check">

 <input class="form-check-input" type="radio" name="sesso"
 id="male" value="m" <?php if($dati['SESSO']=='m') echo checked ?>>
 <label class="form-check-label text-light" for"male">Male</label>

 </div>

 </div> 

 <div class="col-3">

 <div class="form-check">

 <input class="form-check-input" type="radio" name="sesso"
 id="female" value="f" <?php if($dati['SESSO']=='f') echo checked ?>>
 <label class="form-check-label text-light" for="female">Female</label>

 </div>

 </div>
 </div>

<!--submit-->

<input type="submit" class="btn btn-success btn-block" nome="salva" id="save" value="Save">

</form>

</div>

</div>
</div>

</div>

<?php

require_once("footer.php");

?>
