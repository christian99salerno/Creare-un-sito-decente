<?php

require_once("header.php");

?>

<div class="container-fluid">

<div class="row justify-content-center">
<div class="col-6">

<div class="jumbotron mt-5">

<h4>Entra a far parte della nostra Community</h4>

<!--form-->

<form action="memorizza_dati.php" method="post">

<div class="form-group mt-5">

 <input type="email" class="form-control" id="email" placeholder="E-mail" name="email">

</div>

<div class="form-group mt-5">

<input type="password" class="form-control" id="password" placeholder="Password" name="password">

</div>

<!--submit-->

<input type="submit" class="mt-5 btn btn-primary btn-block" nome="registrati" id="SignUp" value="Sign Up">

</form>

</div>

</div>
</div>

</div>

<?php

require_once("footer.php");

?>
