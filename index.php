<?php

require_once("header.php");

?>

<div class="container-fluid mb-5">

<div class="row justify-content-center background">
<div class="col-8">

<div class="jumbotron mt-5 trasparenza text-light text-center">

<h1 class="display-4 text-center">Benvenuto</h1>

<p class="lead">
Divertiti in questo sito per appassionati videogiocatori.
Registrati ed entra a far parte di una grande community che condivide
le tue stesse passioni.</p>

<hr>

<p class="lead">
Cerca i videogiochi che più ti piacciono ed informati sulle loro
caratteristiche e sul loro modo di stupire i giocatori
che vi si avvicinano.</p>

<hr>

<p class="lead">
Vota i tuoi preferiti e parla di loro con altri utenti iscritti
al sito nelle discussioni.
Non smettere mai di vivere avventure nel mondo dei

</div>

</div>
</div>

<div class="row zelda mt-5">
<div class="col-12 px-0">

<div class="card" style="z-index:10; margin-top:5rem; margin-left:5rem; width:18rem;">
<img class="card-img-top" src="g1-card.jpg">
<div class="card-body">
<h3 class="card-title">The Legend of Zelda: Breath of the Wild</h3>
<p>The Legend of Zelda: Breath of the Wild è l'esempio di come Nintendo abbia persone tra le sue fila in grado di trasformare i successi del passato, con i loro elementi distintivi, in capolavori del presente, e perché no, anche del futuro. Breath of the Wild è infatti la migliore espressione di una tradizione videoludica che, pur avendo dovuto fare i conti con una recente massificazione, a tratti alienante, che ne ha segnato indelebilmente l'evoluzione, è riuscita a trovare finalmente la sua dimensione nel panorama di un presente quantomai difficile da decifrare.</p>
<p class="text-danger">Spaziogames</p>
</div>
</div>

</div>
</div>

<div class="row dark mt-5">
<div class="col-12 px-0">

<div class="card" style="z-index:10; float:right; margin-top:5rem; margin-right:5rem; width:18rem;">
<img class="card-img-top" src="g2-card.jpg">
<div class="card-body">
<h3 class="card-title">Dark Souls 3</h3>
<p>Dark Souls III è arrivato per regalare ai fan del genere e ai nuovi adepti decine di ore estremamente soddisfacenti, all'interno di ambientazioni parecchio ispirate e articolate in maniera intelligente. Comincia un po' a rilento e inevitabilmente sa di già visto, ma il design dei livelli esplode man mano che si prosegue, regalando alcuni scontri memorabili, mai visti in un videogioco. Il sistema di controllo e combattimento nettamente migliorati lo rendono appagante e la curva di difficoltà è meno brutale per chi vuole approcciare per la prima volta al genere, tenendo conto che il tasso di sfida è ben sopra la media e la morte comunque è sempre dietro l'angolo.</p>
<p class="text-danger text-right">Multiplayer</p>
</div>
</div>

</div>
</div>

<div class="row horizon mt-5">
<div class="col-12 px-0">

<div class="card" style="z-index:10; margin-top:5rem; margin-left:5rem; width:18rem;">
<img class="card-img-top" src="g3-card.jpg">
<div class="card-body">
<h3 class="card-title">Horizon Zero Dawn</h3>
<p>Ci troviamo dinnanzi ad un titolo dalla struttura semplice: un open-world con dinamiche action-rpg, che però riesce a stupire e a distinguersi grazie ad una più che buona mole di contenuti e alla loro indiscutibile qualità. Il tutto supportato da un comparto tecnico all'avanguardia e da un gameplay divertentissimo, profondo ed estremamente appagante. È chiaro i limiti del genere di riferimento non sono stati completamente debellati, eppure il sistema funziona. Il viaggio di Aloy è fra i migliori che abbiamo mai intrapreso.</p>
<p class="text-danger">Everyeye</p>
</div>
</div>

</div>
</div>

<div class="row">
<div class="col-6">

<!--login-->

<?php if(!isset($_SESSION["autorized"]) or !$_SESSION["autorized"]==1){ ?>

<div class="jumbotron mt-5">

<h2>Login</h2>

<form action="login.php" method="post">

<div class="form-group">

<label for="email">Email</label>
<input type="email" class="form-control" id="email"
placeholder="E-mail" name="email">

</div>

<div class="form-group">

<label for="password">Password</label>
<input type="password" class="form-control" id="password"
placeholder="Password" name="password">

</div>

<!--submit-->

<input type="submit" class="btn btn-primary btn-block"
nome="accedi" id="Login" value="Login">

</form>

</div>

<?php } ?>


</div>
</div>

</div>

<?php

require_once("footer.php");

?>
