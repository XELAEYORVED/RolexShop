# ⌚ OCCAS'ROLEX - TFE 6TQ (IPAM Nivelles)

**Projet :** Plateforme e-commerce fictive de revente de montres de luxe.  
**Cadre :** Épreuve Intégrée (TFE) pour l'obtention du CESS/CQ6 en Informatique.

---

## 📝 Description du projet
OCCAS'ROLEX est un site web dynamique permettant la mise en avant et la gestion d'un catalogue de montres de prestige. Ce projet démontre la capacité à lier une interface utilisateur moderne à une base de données relationnelle sécurisée.

> **Note :** Ce site est une réalisation à but pédagogique (fictif).

---

## 🔐 Sécurité et Gestion des Accès
L'un des points majeurs de ce projet est le système d'authentification robuste que j'ai implémenté :

* **Hachage des mots de passe :** Utilisation de la fonction PHP `password_hash()` pour stocker les mots de passe de manière sécurisée en base de données.
* **Gestion des rôles :** * **Utilisateurs :** Accès au catalogue et aux fonctions d'achat.
    * **Administrateurs :** Accès privilégié à un tableau de bord de gestion.

---

## 🛠️ Fonctionnalités (CRUD)
Le panneau d'administration permet une gestion complète des ressources :

1.  **Gestion des Articles :** Ajouter de nouvelles montres, modifier les prix/descriptions ou supprimer des modèles en fin de stock.
2.  **Gestion des Utilisateurs :** Possibilité pour l'admin de visualiser et de supprimer des comptes utilisateurs.
3.  **Interface Responsive :** Utilisation de **Bootstrap 5** pour garantir une navigation fluide sur PC, tablette et smartphone.

---

## 💻 Stack Technique
* **Langage :** PHP 8
* **Base de données :** MySQL 
* **Style :** CSS3 & Framework Bootstrap 
* **Environnement :** WAMP / XAMPP

---

## 🚀 Installation locale
1.  Cloner le dépôt dans votre dossier `www` ou `htdocs`.
2.  Importer le fichier `occasirolex.sql` dans votre interface **phpMyAdmin**.
3.  Configurer les identifiants de connexion dans le fichier `config.php`.
4.  Ouvrir votre navigateur sur `localhost/occas-rolex`.

---

**Réalisé par :** [Ton Nom]  
**Année académique :** 2025 - 2026  
**École :** Institut Provincial d'Enseignement Secondaire (IPAM Nivelles)
