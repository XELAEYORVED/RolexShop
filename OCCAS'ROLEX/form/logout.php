<?php 
session_start();    
session_unset();  // supprime toute les variables de la session (pas nécessaire de ce cas de figure)
session_destroy(); // detruit la session

header("Location: ../index.php");
?>