<!DOCTYPE html>
<html>
  <head>
    <title>Liste de cours</title>
    <meta charset="utf-8">
    <script src="script.js"></script>
  </head>
  <body>
    <h1>Liste de cours enseignés à l'hiver</h1>
    <p>Voici la liste :</p>
    <div id="contenu">
      <ul>
        <li>Aucun cours</li>
      </ul>
    </div>
    <button id="load-data" type="button">Charger la liste</button>
    <script>
let element = document.getElementById("load-data");
element.addEventListener("click", chargerListeCours);
    </script>
  </body>
</html>
