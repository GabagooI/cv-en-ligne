 
<!DOCTYPE html>
<html lang="fr">

    <head>
        <meta charset="utf-8" />
        <link rel="stylesheet" href="cible-style.css" />
        <title>Résultat du formulaire</title>
    </head>

    <body>
      
      <?php

      $anneevisiteur = preg_replace('#^([0-9]{2})/([0-9]{2})/([0-9]{4})$#', '$3', $_POST['date']);
      $moisvisiteur = preg_replace('#^([0-9]{2})/([0-9]{2})/([0-9]{4})$#', '$2', $_POST['date']);
      $jourvisiteur = preg_replace('#^([0-9]{2})/([0-9]{2})/([0-9]{4})$#', '$1', $_POST['date']);
      

      if (isset($_POST['nom']) AND preg_match('#^[a-z]+$#i', $_POST['nom'])){
        $nomok = "oui";
      }
      else{
        $nomok = "non";
      }

      if (isset($_POST['prenom']) AND preg_match('#^[a-z]+$#i', $_POST['prenom'])){
        $prenomok = "oui";
      }
      else{
        $prenomok = "non";
      }

      if (isset($_POST['date']) AND preg_match('#^([0-9]{2})/([0-9]{2})/([0-9]{4})$#', $_POST['date'])){

        if ($anneevisiteur < date('Y') AND $anneevisiteur > 1900){
          $anneeok = "oui";
        }
        else{
          $anneeok = "non";
        }

        if ($moisvisiteur > 0 AND $moisvisiteur < 13){
          $moisok = "oui";
        }  
        else{
          $moisok = "non";
        }

        if ($jourvisiteur > 0 AND $jourvisiteur < 32){
          $jourok = "oui";
        }
        else{
          $jourok = "non";
        }

        if ($jourok == "oui" AND $moisok == "oui" AND $anneeok == "oui"){
          $dateok = "oui";
        }
        else{
          $dateok = "non";
        }
      }
      else{
        $dateok = "non";
      }

      if (isset($_POST['mail']) AND preg_match('#^[a-z0-9._-]+@[a-z0-9._-]{2,}\.[a-z]{2,4}$#', $_POST['mail'])){
        $mailok = "oui";
      }
      else{
        $mailok = "non";
      }

      if (isset($_POST['avis'])){
        $avisok = "oui";
      }
      else{
        $avisok ="non";
      }

      if ($nomok == "oui" AND $prenomok == "oui" AND $dateok == "oui" AND $mailok == "oui" AND $avisok == "oui"){
        echo '<p>Merci pour votre retour ' . $_POST['prenom'] . ', et à bientôt :)';
      }
      else{
        echo "<p>Formulaire non recevable pour la/les raison(s) suivante(s) :</p>";
        if ($nomok == "non"){
          echo "<p>- Nom invalide</p>";
        }
        if ($prenomok == "non"){
          echo "<p>- Prénom invalide</p>";
        }
        if ($dateok == "non"){
          echo "<p>- Date invalide</p>";
        }
        if ($mailok == "non"){
          echo "<p>- Adresse e-mail invalide</p>";
        }
        if ($avisok == "non"){
          echo "<p>- Vous devez sélectionner une option d'avis</p>";
        }

      }
      ?>

      <p id="lien">Cliquez <a href="javascript:history.back()">ici</a> pour revenir en arrière</p>

    </body>
</html>