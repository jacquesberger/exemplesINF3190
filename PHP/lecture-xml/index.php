<?php

function displayDocumentAsText($xml) {
  return $xml->SaveXML();
}

function generateBookList($xml) {
  echo "<ul>";

  $documentList = $xml->getElementsByTagName("document");
  for ($i = 0; $i < $documentList->length; $i++) {
    $element = $documentList->item($i);
    if ($element->getAttribute("type") == "book") {
      echo "<li>";
      echo $element->getElementsByTagName("title")->item(0)->textContent;
      echo "</li>";
    }
  }

  echo "</ul>";
}

$document = new DOMDocument();
$document->Load("XML.xml");

?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Exemple PHP</title>
  </head>
  <body>
    <p>Le texte brut du document XML :</p>
    <p><?php echo displayDocumentAsText($document); ?></p>
    <p>Le contenu mis en forme :</p>
    <?php generateBookList($document); ?>
  </body>
</html>
