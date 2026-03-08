<?php

require("config/commandes.php");

$Produits=afficher();

if(isset($_GET['pdt'])){
    
    if(!empty($_GET['pdt']) OR is_numeric($_GET['pdt']))
    {
        $id = $_GET['pdt'];

    }
}

?>

<!doctype html>
<html lang="fr">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="">
<meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
<meta name="generator" content="Hugo 0.80.0">
<title>Montre</title>

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
      </div>
    </div>
   </div>
   <div class="navbar navbar-dark bg-dark shadow-sm">
    <div class="container">
      <a href="#" class="navbar-brand d-flex align-items-center">
       <strong>OCASS'ROLEX</strong>
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarHeader" aria-controls="navbarHeader" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
    </div>
  </div>
</header>
<main>
<div class="album py-5 bg-light">
<div class="container" style="display: flex; justify-content: center">

    <div class="row">
<div class="col-md-2"></div>
<?php foreach($Produits as $produit){ if($produit->id == $id){ ?> 
        <div class="col-md-8">
            <div class="card shadow-sm" >
                <h3 align="center"><?= $produit->nom ?></h3>
                <img src="<?= $produit->image ?>" style="width: 50%">

                <div class="card-body">
                <p class="card-text"><?= $produit->description ?></p>
                <div class="d-flex justify-content-between align-items-center">  
                <script>
function thankachat() {
  if (confirm("Êtes-vous sûr de vouloir acheter ?")) {
    window.location.href = "thankyou.php";
  }
}
</script>
<button type="button" class="btn btn-sm btn-success" onclick="thankachat()">Acheter</button>              
<small class="text" style="font-weight: bold;"><?= $produit->prix ?> €</small>
 </div>
</div>
</div>
</div>
<?php }} ?>

<div class="col-md-2"></div>
    </div>
 </div>
</div>

</main>
</main>
<div class="footer11">
  <div class="container ">
    <div class="row">
      <div class="col-md-6">
        <p>2023 OCASSROLEX. Tous droits réservés.</p>
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
</html>
