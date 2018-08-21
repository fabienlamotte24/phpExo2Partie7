<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8" />
    <title>Exercice 2</title>
  </head>
  <body>
    <!--Création d'un formulaire simple avec la méthode POST-->
    <form action="user.php" method="POST">
      <!--Champs nom-->
      <label for="lastName">Votre nom: </label><input type="text" name="lastName" id="lastName" placeholder="nom" />
      <!--Champs prénom-->
      <label for="firstName">Votre prénom: </label><input type="text" name="firstName" id="firstName" placeholder="prénom" />
      <input type="submit" value="Page Suivante" />
      <!--Cliquer sur "Page Suivante" va garder en mémoire les données inscrite dans la superglobale $_POST['']-->
    </form>
  </body>
</html>
