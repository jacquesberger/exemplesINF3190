function chargerListeCours() {
  let container = document.getElementById("contenu");
  loadFragment()
    .then(content =>
      container.innerHTML = content;)
    .catch(error =>
      container.innerHTML = "<p>Erreur de chargement des données</p>";);
}

async function loadFragment() {
  let response = await fetch("service_ajax.php");
  let content = await response.text();
  return content;
}
