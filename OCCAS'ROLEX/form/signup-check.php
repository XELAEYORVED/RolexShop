<?php
session_start(); //démarrage de la session pour stocker les informations  de l'utilisateur

include "../config/connexion.php"; // besoin du fichier de configuration pour établir la connexion à la base de données

if (isset($_POST['uname']) && isset($_POST['password'])
    && isset($_POST['name']) && isset($_POST['re_password'])) {

    function validate($data)
    {
        $data = trim($data); // Supprime les espaces inutiles avant et après les données
        $data = stripslashes($data); // Supprime les antislashs (\) ajoutés pour échapper les caractères spéciaux
        $data = htmlspecialchars($data); // Convertit les caractères spéciaux en entités HTML pour éviter les failles 
        return $data;
    }

    $uname = validate($_POST['uname']); // Valide et stocke le nom d'utilisateur
    $pass = validate($_POST['password']); // Valide et stocke le mot de passe

    $re_pass = validate($_POST['re_password']); // Valide et stocke le mot de passe de confirmation
    $name = validate($_POST['name']); // Valide et stocke le nom

    $user_data = 'uname=' . $uname . '&name=' . $name; // Stocke les données utilisateur pour une utilisation ultérieure dans les redirections
                 
                        // GESTION DES ERREURS   

    if (empty($uname)) {
        // Si le nom d'utilisateur est vide, redirige vers signup.php avec un message d'erreur
        header("Location: signup.php?error=Nom d'utilisateur est requis");
        exit();
    } else if (empty($pass)) {
        // Si le mot de passe est vide, redirige vers signup.php avec un message d'erreur
        header("Location: signup.php?error=Mot de passe requis");
        exit();
    } else if (empty($re_pass)) {
        // Si le mot de passe de confirmation est vide, redirige vers signup.php avec un message d'erreur
        header("Location: signup.php?error=La confirmation est requis");
        exit();
    } else if (empty($name)) {
        // Si le nom est vide, redirige vers signup.php avec un message d'erreur
        header("Location: signup.php?error=Le nom est requis");
        exit();
    } else if ($pass !== $re_pass) {
        // Si le mot de passe et le mot de passe de confirmation ne correspondent pas, redirige vers signup.php avec un message d'erreur
        header("Location: signup.php?error=Le mot de passe de confirmation ne correspond pas");
        exit();
    } else {
        try {
            // Ajout d'un grain de sel pour renforcer la sécurité du mot de passe
            $salt = 'a1b2c3d4e5f6g7h8i9j0';
            $passWithSalt = $pass . $salt;

            // Hashage du mot de passe avec la fonction sha1 et le grain de sel
            $pass = sha1($passWithSalt);

            $sql = "SELECT * FROM users WHERE user_name=:uname";
            $stmt = $access->prepare($sql);
            $stmt->bindParam(':uname', $uname);
            $stmt->execute();

            if ($stmt->rowCount() > 0) {
                // Si un utilisateur avec le même nom d'utilisateur existe déjà, redirige vers signup.php avec un message d'erreur
                header("Location: signup.php?error=Le nom d'utilisateur est pris, essayez-en un autre");
                exit();
            } else {
                $sql2 = "INSERT INTO users (user_name, password, name) VALUES (:uname, :pass, :name)"; // insertion des donnée dans la tables user et mis en parametres par securité 
                $stmt2 = $access->prepare($sql2);
                $stmt2->bindParam(':uname', $uname);
                $stmt2->bindParam(':pass', $pass);
                $stmt2->bindParam(':name', $name);
                $stmt2->execute(); // requete executer insertion à la bdd

                if ($stmt2) {
                    // Si l'insertion dans la base de données est réussie, redirige vers signup.php avec un message de succès
                    header("Location: signup.php?success=Votre compte est acquis");
                    exit();
                } else {
                    // Si une erreur inconnue s'est produite lors de l'insertion dans la base de données, redirige vers signup.php avec un message d'erreur
                    header("Location: signup.php?error=Une erreur inconnue s'est produite");
                    exit();
                }
            }
        } catch (PDOException $e) {
            // Si une erreur de base de données se produit, redirige vers signup.php avec un message d'erreur
            header("Location: signup.php?error=Une erreur de base de données s'est produite");
            exit();
        }
    }
} else {
    // Si les données attendues ne sont pas présentes dans la requête POST, redirige vers signup.php
    header("Location: signup.php");
    exit();
}

