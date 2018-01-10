<?php
 session_start();
 session_unset(); //DISTRUGGE le variabili
 session_destroy(); //DISTRUGGE la sessione.
 header("Location: index.php"); //si ricarica la pagina di login
 exit; //si termina lo script in modo da ritornare alla schermata di login
?>
