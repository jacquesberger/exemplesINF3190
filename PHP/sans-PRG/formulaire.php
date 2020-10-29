<?php
  $message = "";
  $nom = "";
  $prenom = "";
  $success = false;

  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST["nom"]) && isset($_POST["prenom"])) {
      $nom = $_POST["nom"];
      $prenom = $_POST["prenom"];

      if (empty($nom)) {
        $message = $message . " Le nom est obligatoire.";
      } else if (empty($prenom)) {
        $message = $message . " Le prénom est obligatoire.";
      } else {
        $success = true;

        // Faire quelque chose avec les données.
      }

    } else {
      http_response_code(400);
      exit;
    }
  }
?>

<!DOCTYPE html>
<html lang="fr">
  <head>
    <title>Exemple sans Post-Redirect-Get</title>
    <meta charset="utf-8">
  </head>
  <body>
    <?php
      if ($success):
        echo "<h1>Succès</h1>";
      else:
    ?>
    <h1>Identification</h1>
    <?php
      if (!empty($message)) {
        echo "<div>" . $message . "</div>";
      }
    ?>
    <form method="post" action="formulaire.php">
      <label for="input-nom">Nom : </label>
      <?php
        echo "<input type='text' id='input-nom' name='nom' placeholder='Entrez votre nom' value='{$nom}'>"
      ?>
      <br>
      <label for="input-prenom">Prénom : </label>
      <?php
        echo "<input type='text' id='input-prenom' name='prenom' placeholder='Entrez votre prénom' value='{$prenom}'>"
      ?>
      <br>
      <input type="submit" value="Soumettre">
    </form>
    <?php endif; ?>
  </body>
</html>
