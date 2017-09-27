<html>

<head><title>Ciao</title></head>

<body>




<div style="float:left; width:100%;height:10%; text-align:center; font-size:20px; padding-top:10px">Benvenuti</div>
<div style="float:left; width:20%; height:3%; text-align:center; background-color:red; padding-top:5px; border-radius:20px">Home</div>
<div style="float:left; width:20%; height:3%; text-align:center; background-color:green; padding-top:5px; border-radius:20px">Staff</div>
<div style="float:left; width:20%; height:3%; text-align:center; background-color:blue; padding-top:5px; border-radius:20px">Community</div>
<div style="float:left; width:20%; height:3%; text-align:center; background-color:orange; padding-top:5px; border-radius:20px">Gamers</div>
<div style="float:left; width:20%; height:3%; text-align:center; background-color:gray; padding-top:5px; border-radius:20px">Live</div>
<div style="float:left; width:20%; height:15%; text-align:center; border-radius:20px; margin-top:10px; padding-top:80px; background-color:red">Sei nella pagina Home</div>
<div style="float:left; width:20%; height:15%; text-align:center; border-radius:20px; margin-top:10px; padding-top:80px; background-color:green">Lo Staff a tua disposizione</div>
<div style="float:left; width:20%; height:15%; text-align:center; border-radius:20px; margin-top:10px; padding-top:80px; background-color:blue">Condividiamo informazioni</div>
<div style="float:left; width:20%; height:15%; text-align:center; border-radius:20px; margin-top:10px; padding-top:80px; background-color:orange">I tuoi giochi preferiti</div>
<div style="float:left; width:20%; height:15%; text-align:center; border-radius:20px; margin-top:10px; padding-top:80px; background-color:gray">Giochiamo adesso insieme</div>
<div style="float:left; width:20%; height:10%; margin-top:20px; font-size:20px">Inscriviti</div>

<div style="width:20%; height:20%; margin-top:20px">

<form action="">
<input type="text" placeholder='Nome Utente'></br>
<input type="password" placeholder='Password'>
</form>

</div>

<?php

for($i=0;$i<3;$i++){ ?>

<div style="float:left; width:20%; height:20%; margin-top:40px">

<?php 
$saluti="Ciao questo e' il mio primo sito";
echo $saluti;
?>


</div>

<?php } ?>

</body>

</html>
