<html>

<head>

<title>Site</title>

<link rel="stylesheet" href="bootstrap.min.css">

<script src="jquery-3.2.1.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>

<script src="bootstrap.min.js"></script>

</head>

<body>


<!--navigation bar-->

<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">Forever Gamers</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="staff.php">Staff</a>
      </li>
      <li class="nav-item">
<a class="nav-link" href="community.php">Community</a>
      </li>
      <li class="nav-item">
<a class="nav-link" href="battaglia_navale.php">Battaglia Navale</a>
      </li>
      <li class="nav-item">
<a class="nav-link" href="games.php">Games</a>
      </li>
    </ul>

<!--search bar-->

<form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>

  </div>

<!--end search bar-->

</nav>

<!--end navigation bar-->

<div class="container">

<img src="1.jpg" class="img-fluid" alt="Responsive image">

<div class="row">
<div class="col-6">

<div class="jumbotron">

<h4>Entra a far parte della nostra Community</h4>

</div>
</div>
</div>

<div class="row">
<div class="col-6">

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

<input type="submit" class="btn btn-primary btn-block" nome="registrati" id="SignIn" value="Sign In">

</form>

<!--login-->

<form action="profile.php" method="post">

<div class="form-group">

 <label for="email">Email</label>
 <input type="email" class="form-control" id="email" placeholder="E-mail" name="email">

</div>

<div class="form-group">

<label for="password">Password</label>
<input type="password" class="form-control" id="password" placeholder="Password" name="password">

</div>

<!--submit-->

<input type="submit" class="btn btn-primary btn-block" nome="accedi" id="SignUp" value="Sign Up">

</form>

</div>

</div>

</div>

</body>

</html>
