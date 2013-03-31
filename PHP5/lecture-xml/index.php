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
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>Exemple PHP</title>
</head>
<body>
	<p>Le texte brut du document XML : </p>
	<p><?php echo displayDocumentAsText($document); ?></p>
	<?php generateBookList($document); ?>
</body>
</html>