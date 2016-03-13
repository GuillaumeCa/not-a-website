<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>

<?php
session_start();
$titre="Enregistrement";

if ($id!=0) erreur(ERR_IS_CO);
?>

<?php
if (empty($_POST['pseudo'])) // Si on la variable est vide, on peut considérer qu'on est sur la page de formulaire
{?>
	<h1>Inscription</h1>
	<form method="post" action="inscription.php" enctype="multipart/form-data">
  	<fieldset>
    	<label for="email">SIREN :</label><input type="text" name="email" id="email"/><br>
    	<label for="msn">Mot de passe :</label><input type="text" name="msn" id="msn"/><br>
    	<label for="website">Confirmation de mot de passe :</label><input type="text" name="website" id="website"/>
    </fieldset>

  	<p>Les champs précédés d'un * sont obligatoires.</p>
  	<p><input type="submit" value="S'inscrire" /></p></form>
  </form>
<?php

}  else {
    $pseudo_erreur1 = NULL;
    $pseudo_erreur2 = NULL;
    $mdp_erreur = NULL;
    $email_erreur1 = NULL;
    $email_erreur2 = NULL;
    $msn_erreur = NULL;
    $signature_erreur = NULL;
    $avatar_erreur = NULL;
    $avatar_erreur1 = NULL;
    $avatar_erreur2 = NULL;
    $avatar_erreur3 = NULL;
}
?>
