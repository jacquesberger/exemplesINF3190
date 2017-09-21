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

function generateFirstnameList2() {
  echo "<ul>";
  foreach (file("./content.txt") as $line) {
    $trimmedValue = trim($line);
    echo "<li>{$trimmedValue}</li>";
  }
  echo "</ul>";
}
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Lecture d'un fichier texte</title>
  </head>
  <body>
    <p>Liste de prénoms :</p>
    <?php generateFirstnameList2(); ?>
  </body>
</html>
