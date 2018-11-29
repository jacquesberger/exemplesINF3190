<?php
echo "<ul>";
foreach (file("./liste.txt") as $line) {
  $trimmedValue = trim($line);
  echo "<li>{$trimmedValue}</li>";
}
echo "</ul>"
?>
