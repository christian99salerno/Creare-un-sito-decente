<?php
require_once("header.php");
?>

<div class="container mb-1">

<img src="1.jpg" class="img-fluid" alt="Responsive image">

<div class="row">
<div class="col-6">

<!--login-->

<form action="login.php" method="post">

<div class="form-group">

 <label for="email">Email</label>
 <input type="email" class="form-control" id="email" placeholder="E-mail" name="email">

</div>

<div class="form-group">

<label for="password">Password</label>
<input type="password" class="form-control" id="password" placeholder="Password" name="password">

</div>

<!--submit-->

<input type="submit" class="btn btn-primary btn-block" nome="accedi" id="Login" value="Login">

</form>

</div>

</div>

</div>

<?php
require_once("footer.php");
?>
