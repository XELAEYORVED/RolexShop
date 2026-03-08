<!DOCTYPE html>
<html>
<head>
	<title>Connexion</title>
	<link rel="stylesheet" type="text/css" href="style/style.css">
</head>
<body class="bodyform21">
     <form action="form/login.php" class="formsgn" method="post">
     	<h2 class="h2titre">OCCAS'ROLEX</h2>
     	<?php if (isset($_GET['error'])) { ?>
     		<p class="error"><?php echo $_GET['error']; ?></p>
     	<?php } ?>
     	<label>Nom utilisateur</label>
     	<input type="text" name="uname" placeholder="Nom d'utilisateur"><br>
		
     	<label>Mot de passe</label>
     	<input type="password" name="password" placeholder="Entrez votre mot de passe"><br>

     	<button class="button44"type="submit">Connectez-vous</button>
          <a href="form/signup.php" class="ca">Devenir client ?</a>
     </form>
</body>
</html>
