<?php

function modifier($image, $nom, $prix, $desc, $id) // parametre
{
  if(require("connexion.php")) // connexion à la bdd 
  {
    $req = $access->prepare("UPDATE produits SET `image` = ?, nom = ?, prix = ?, description = ? WHERE id=?"); // mettre à jour les champs de la tables produits avec de nouvelles valeurs 

    $req->execute(array($image, $nom, $prix, $desc, $id));

    $req->closeCursor(); // referme la requete 
  }
}

function afficherUnProduit($id)
{
	if(require("connexion.php"))
	{
		$req=$access->prepare("SELECT * FROM produits WHERE id=?");

        $req->execute(array($id));

        $data = $req->fetchAll(PDO::FETCH_OBJ); // fetch retourne chaque ligne de la tables produits 

        return $data;

        $req->closeCursor();
	}
}
  function ajouter($image, $nom, $prix, $desc)
  {
    if(require("connexion.php"))
    {
      $req = $access->prepare("INSERT INTO produits (image, nom, prix, description) VALUES (?, ?, ?, ?)");

      $req->execute(array($image, $nom, $prix, $desc));

      $req->closeCursor();
    }
  }

function afficher()
{
	if(require("connexion.php"))
	{
		$req = $access->prepare("SELECT * FROM produits ORDER BY id DESC"); 

        $req->execute();

        $data = $req->fetchAll(PDO::FETCH_OBJ); 

        return $data;

        $req->closeCursor();
	}
}

function supprimer($id)
{
	if(require("connexion.php"))
	{
		$req=$access->prepare("DELETE FROM produits WHERE id=?");

		$req->execute(array($id));

		$req->closeCursor();
	}
}


?>