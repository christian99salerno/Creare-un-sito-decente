<?php
require_once("header.php");
?>

<div class="container">

<!--<img src="#.jpg" class="img-fluid" alt="Responsive image">-->

<div class="row justify-content-md-center">
<div class="col-6">

<div class="jumbotron">

<h4>Entra a far parte della nostra Community</h4>

</div>

<!--form-->

<form action="memorizza_dati.php" method="post">


<div class="form-group">

 <label for="email">Email</label>
 <input type="email" class="form-control" id="email" placeholder="E-mail" name="email">

</div>

<div class="form-group">

<label for="password">Password</label>
<input type="password" class="form-control" id="password" placeholder="Password" name="password">

</div>


<!--submit-->

<input type="submit" class="btn btn-primary btn-block" nome="registrati" id="SignUp" value="Sign Up">

</form>

</div>

</div>

</div>

<?php
require_once("footer.php");
?>
