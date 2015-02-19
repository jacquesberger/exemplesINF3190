function sendData() {
  var url = "serveur.php";
  url = url + "?name=" + document.getElementById("name").value;
  url = url + "&age=" + document.getElementById("age").value;
  url = encodeURI(url);

  var request = new XMLHttpRequest();
  request.open("POST", url, false);
  request.send();

  if (request.responseText === "OK")
    document.getElementById("result").innerHTML = "Données sauvegardées";
}
