<?php

require_once("header.php");

?>

<div class="container mt-2">

<img src="1.jpg" class="img-fluid" alt="Responsive image">

<div class="row">
<div class="col-6">

<!--login-->

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

</div>
</div>

</div>

<?php

require_once("footer.php");

?>
