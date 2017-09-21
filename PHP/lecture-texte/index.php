<?php
function generateFirstnameList() {
  $file = fopen('./content.txt', 'rt');
  echo "<ul>";

  while ((!feof($file)) && ($oneLine = fgets($file))) {
    $trimmedValue = trim($oneLine);
    echo "<li>{$trimmedValue}</li>";
  }

  fclose($file);
  echo "</ul>";
}
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Exemple PHP</title>
  </head>
  <body>
    <p>Liste de prénoms :</p>
    <?php generateFirstnameList(); ?>
  </body>
</html>
