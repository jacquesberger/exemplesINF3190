function chargerListeCours() {
  var xhr = new XMLHttpRequest();
  xhr.open("GET", "service_ajax.php", true);
  xhr.onreadystatechange = function() {
    if (xhr.readyState === 4) {
      var container = document.getElementById("contenu");
      if (xhr.status === 200) {
        // cas normal
        container.innerHTML = xhr.responseText;
      } else {
        // cas en erreur
        container.innerHTML = "<p>Erreur de chargement des données</p>";
      }
    }
  };
  xhr.send();
}
