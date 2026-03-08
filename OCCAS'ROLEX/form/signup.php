<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
	<title>Inscription</title>
	<link rel="stylesheet" type="text/css" href="../style/style.css">
</head>
<body class="bodyform21">
     <form action="signup-check.php" class="formsgn" method="post">
          
     	<h2>OCCAS'ROLEX</h2>
          
     	<?php if (isset($_GET['error'])) { ?>
     		<p class="error"><?php echo $_GET['error']; ?></p> 
     	<?php } ?>

          <?php if (isset($_GET['success'])) { ?>
               <p class="success"><?php echo $_GET['success']; ?></p>
          <?php } ?>

          <label>Prénom</label>
          <?php if (isset($_GET['name'])) { ?>
               <input type="text" 
                      name="name" 
                      placeholder="Prénom"
                      value="<?php echo $_GET['name']; ?>"><br>
          <?php }else{ ?>
               <input type="text" 
                      name="name" 
                      placeholder="Prénom"><br>
          <?php }?>

          <label>Nom d'utilisateur</label>
          <?php if (isset($_GET['uname'])) { ?>
               <!-- Si la variable GET 'uname' est définie, utilisez sa valeur comme valeur par défaut dans l'input -->
               <input type="text" 
                      name="uname" 
                      placeholder="Nom d'utilisateur"
                      value="<?php echo $_GET['uname']; ?>"><br>
          <?php }else{ ?>
               <!-- Sinon, affichez un input vide pour le nom d'utilisateur -->
               <input type="text" 
                      name="uname" 
                      placeholder="Nom d'utilisateur"><br>
          <?php }?>


     	<label>Mot de passe</label>
     	<input type="password" 
                 name="password" 
                 placeholder="entrez votre mot de passe"><br>

          <label>Re mot de passe</label>
          <input type="password" 
                 name="re_password" 
                 placeholder="Re entrez votre mot de passe"><br>

     	<button type="submit" class="button44">S'inscrire</button>
          <a href="../index.php" class="ca">Vous avez déjà un compte ?</a>
     </form>
</body>
</html>