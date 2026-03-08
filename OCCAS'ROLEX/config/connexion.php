<?php
try {
    $host = 'localhost'; // Adresse du serveur de base de données
    $dbname = 'shop'; // Nom de la base de données
    $username = 'root'; // Nom d'utilisateur de la base de données
    $password = 'root'; // Mot de passe de la base de données

    // Connexion à la base de données avec PDO
	$access = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", $username, $password);

    // Définition des attributs de PDO pour gérer les erreurs et exceptions
    $access->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	$access->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
    
    // Utilisation de la connexion $db pour exécuter des requêtes ou d'autres opérations sur la base de données
    
} catch (PDOException $e) {
    // Gestion des exceptions
    echo "Erreur de connexion à la base de données : " . $e->getMessage();
}

?>
