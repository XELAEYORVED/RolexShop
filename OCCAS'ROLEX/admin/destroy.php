<?php
session_start();

if ( $_SESSION['user_name'] === 'alex@admin.be') {
    session_unset(); // Supprimer toutes les variables de session
    session_destroy(); // Détruire la session

    header("Location: ../index.php");
    exit();
} 
?>


