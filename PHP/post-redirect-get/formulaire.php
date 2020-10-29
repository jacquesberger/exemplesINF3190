<?php
  $message = "";
  $prenom = "";
  $nom = "";
  $succes = false;

  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Vérifier le format des données reçues.
    if (!isset($_POST["prenom"]) || !isset($_POST["nom"]) || !isset($_POST["age"])) {
      // TODO Valider que la valeur de l'âge est numérique et dans les valeurs 
      // acceptées.
      http_response_code(400);
      exit;
    }

    $prenom = $_POST["prenom"];
    $nom = $_POST["nom"];
    $age = intval($_POST["age"]);

    if (empty($prenom)) {
      $message = $message . "Le prénom est obligatoire. ";
    }
    if (empty($nom)) {
      $message = $message . "Le nom est obligatoire. ";
    }

    if (empty($message)) {
      header("Location: confirmation.php?nom={$nom}&prenom={$prenom}", true, 303);
      exit;
    } 
  }
?>
<!DOCTYPE html>
<html>
  <head>
    <title>Inscription</title>
    <meta charset="utf-8">
  </head>
  <body>
    <h2>Formulaire d'inscription</h2>
    <?php if (!empty($message)) {
            echo "<p>{$message}</p>";
          }
     ?>
    <form method="post" action="formulaire.php">
      <label for="champs-nom">Nom : </label>
      <?php echo "<input type='text' name='nom' id='champs-nom' value='{$nom}'>"; ?>
      <br>
      <label for="champs-prenom">Prénom : </label>
      <?php echo "<input type='text' name='prenom' id='champs-prenom' value='{$prenom}'>"; ?>
      <br>
      <label for="champs-age">Âge : </label>
      <select name="age" id="champs-age">
        <?php
          for($i = 20; $i < 25; $i++) {
            if ($i == $age) {
              $selected = "selected='selected'";
            } else {
              $selected = "";
            }
            echo "<option value='{$i}' {$selected}>{$i}</option>";
          }
        ?>
      </select>
      <br>
      <br>
      <input type="submit" value="S'inscrire">
    </form>
  </body>
</html>
