<?php 
session_start(); 
include "../config/connexion.php";

if (isset($_POST['uname']) && isset($_POST['password'])) {

    function validate($data){
       $data = trim($data);
       $data = stripslashes($data);
       $data = htmlspecialchars($data);
       return $data;
    }

    $uname = validate($_POST['uname']);
    $pass = validate($_POST['password']);

    if (empty($uname)) {
        header("Location: index.php?error=User Name is required");
        exit();
    } else if (empty($pass)) {
        header("Location: index.php?error=Password is required");
        exit();
    } else {
        // Ajout d'un grain de sel
        $salt = 'a1b2c3d4e5f6g7h8i9j0';
        $passWithSalt = $pass . $salt;

        // Hashage du mot de passe avec sha1 et grain de sel
        $hashedPass = sha1($passWithSalt);

        try {
            $sql = "SELECT * FROM users WHERE user_name=:uname AND password=:hashedPass";
            $stmt = $access->prepare($sql);
            $stmt->bindParam(':uname', $uname);
            $stmt->bindParam(':hashedPass', $hashedPass);
            $stmt->execute();

            if ($stmt->rowCount() === 1) {
                $row = $stmt->fetch(PDO::FETCH_ASSOC);
                if ($row['user_name'] === $uname && $row['password'] === $hashedPass) {
                    if ($row['user_name'] === 'alex@admin.be') {
                        $_SESSION['user_name'] = $row['user_name'];
                        $_SESSION['name'] = $row['name'];
                        $_SESSION['id'] = $row['id'];
                        header("Location: ../admin/afficher.php");
                        exit();
                    } else {
                        $_SESSION['user_name'] = $row['user_name'];
                        $_SESSION['name'] = $row['name'];
                        $_SESSION['id'] = $row['id'];
                        header("Location: ../accueil.php");
                        exit();
                    }
                } else {
                    header("Location: ../index.php?error=Votre nom d'utilisateur ou votre mot de passe est incorrect");
                    exit();
                }
            } else {
                header("Location: ../index.php?error=Votre nom d'utilisateur ou votre mot de passe est incorrect");
                exit();
            }
        } catch (PDOException $e) {
            header("Location: ../index.php?error=Database erreur");
            exit();
        }
    }
    
} else {
    header("Location: ../index.php");
    exit();
}

