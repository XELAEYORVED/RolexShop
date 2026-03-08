<?php
require("config/commandes.php");         // Inclut le fichier contenant les fonctions pour récupérer les produits
$Produits = afficher();                 // Récupère les produits à afficher et les stocke dans la variable $Produits

if (isset($_GET['sort'])) {             // Vérifie si le paramètre GET 'sort' est présent dans l'URL
    if ($_GET['sort'] == 'alphabetic') {  // Si 'sort' est égal à 'alphabetic'
        // Tri des produits par ordre alphabétique du nom
        usort($Produits, function($a, $b) {
            return strcmp($a->nom, $b->nom);  // Compare les noms des produits pour le tri alphabétique
        });
    } elseif ($_GET['sort'] == 'price') { // Si 'sort' est égal à 'price'
                                          // Tri des produits par ordre croissant du prix
        usort($Produits, function($a, $b) {
            return $a->prix - $b->prix;     // Compare les prix des produits pour le tri croissant
        });
    }
}
?>

<?php 
session_start();

if (isset($_SESSION['id']) && isset($_SESSION['user_name'])) { // permet d'avoir si l'utilisateur est bien connecté 

 ?>
 
<!doctype html>
<html lang="fr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.80.0">
    <title>OCAS'ROLEX</title>
    <link rel="stylesheet" type="text/css" href="style/style.css">
    

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>

  </head>
  <body>
    
<header>
  <div class="collapse bg-dark" id="navbarHeader">
    <div class="container">
      <div class="row">
        <div class="col-sm-8 col-md-7 py-4">
        <h4 class="text-white">A propos de nous </h4>
          <p class="text-muted">Le magasin vend des montres Rolex remises à neuf, sponsorisé par Rolex lui-même. Les clients peuvent acheter des montres de qualité supérieure, profiter d'un service personnalisé et de garanties étendues, ainsi que d'un service de réparation et d'entretien. C'est l'endroit idéal pour les amateurs de montres Rolex d'occasion qui souhaite acheter des montres authentiques et exclusives.</p>
        </div>
        <div class="col-sm-4 offset-md-1 py-4">
          <h4 class="text-white"><strong><p>Bonjour, <?php echo $_SESSION['name']; ?></strong></p> </h4>
          <ul class="list-unstyled">        
            <li>
            <a href="form/logout.php" style="display: inline-block; margin: 5px; padding: 8px 16px; font-size: 14px; font-weight: bold; text-align: center; text-decoration: none; background-color: #dc3545; color: #fff; border: none; border-radius: 15px; transition: background-color 0.3s ease;">Se déconnecter</a>
            </li>
            </ul>
        </div>
      </div>
    </div>
  </div>
  <div class="navbar navbar-dark bg-dark shadow-sm">
    <div class="container">
      <a href="#" class="navbar-brand d-flex align-items-center">
       <strong>OCCAS'ROLEX</strong>
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarHeader" aria-controls="navbarHeader" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
    </div>
  </div>
</header>
<main>

  <div class="album py-5 bg-light">
    <div class="container">      
    <a href="?sort=alphabetic" style="display: inline-block; margin: 5px; padding: 8px 16px; font-size: 14px; font-weight: bold; text-align: center; text-decoration: none; background-color: #fff; color: #333; border: 1px solid #333; border-radius: 0; transition: background-color 0.3s ease;">Trier de A-Z</a>
    <a href="?sort=price" style="display: inline-block; margin: 5px; padding: 8px 16px; font-size: 14px; font-weight: bold; text-align: center; text-decoration: none; background-color: #fff; color: #333; border: 1px solid #333; border-radius: 0; transition: background-color 0.3s ease;">Trier par prix</a>
    <br><br>
      <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
          
       <?php foreach($Produits as $produit):  // ce code permet d'afficher les produits ?>                       
        <div class="col">  
          <div class="card shadow-sm">
            <h3><?= $produit->nom ?></h3>
            <img src="<?= $produit->image ?>"style="width: 24%">

            <div class="card-body">
            <p class="card-text"><?= substr($produit->description, 0, 160); ?></p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                  <a href="produit.php?pdt=<?= $produit->id ?>"><button type="button" class="btn btn-sm btn-success">Voir plus</button></a>
                </div>
                <small class="text" style="font-weight: bold;"><?= $produit->prix ?> €</small>
              </div>
            </div>
          </div>
        </div>
       <?php endforeach; ?>
      </div>
    </div>
  </div>
</main>
<div class="footer11">
  <div class="container ">
    <div class="row">
      <div class="col-md-6">
        <p>2023 OCCAS'ROLEX. Tous droits réservés.</p>
        <div class="address">
          <p>Rue Neuve 44245 </p>
          <p>1114 Bruxelles</p>
          <p>Belgique</p>
        </div>
      </div>
      <div class="col-md-6">
        <p><a href="#">Politique de confidentialité</a> | <a href="#">Conditions d'utilisation</a></p>
        <br>
        <p><a href="#">Sponsoriser par Rolex :</a> <br><br> <img src="images/Rolex.png" alt="rolex" width="100" height="60">

      </div>
    </div>
  </div>
</div>

  </body>
      </footer>
      <footer>
</html>
<?php 
}else{
     header("Location: index.php");
     exit();
}
 ?>