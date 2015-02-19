function getCookieExpirationDate() {
  var expirationDate = new Date();
  expirationDate.setDate(expirationDate.getDate() + 30);
  return expirationDate.toUTCString();
}

function writeLoginCookie(login, password) {
  var expiration = "expires=" + getCookieExpirationDate();
  var loginCookie = "login=" + escape(login) + "; " + expiration;
  var passwordCookie = "password=" + escape(password) + "; " + expiration;

  document.cookie = loginCookie;
  document.cookie = passwordCookie;
}

function saveCookie() {
  var login = document.getElementById("login").value;
  var password = document.getElementById("password").value;
  writeLoginCookie(login, password);
}

function resetCookie() {
  writeLoginCookie("", "");
}
