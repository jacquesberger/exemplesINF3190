<?php
function displayDisconnect() {
	echo "<form action='index.php' method='post' onsubmit='resetCookie();'>";
	echo "<p>Bonjour " . htmlspecialchars($_COOKIE["login"]) . "!</p>";
	echo "<p><input type='submit' value='Déconnexion'></p>";
	echo "</form>";
}

function displayLoginPrompt() {
	echo "<form action='index.php' method='post' onsubmit='saveCookie();'>";
	echo "<table>";
	echo "<tr>";
	echo "<td>Nom d'utilisateur :</td>";
	echo "<td><input type='text' name='login' id='login'></td>";
	echo "</tr>";
	echo "<tr>";
	echo "<td>Mot de passe :</td>";
	echo "<td><input type='password' name='password' id='password'></td>";
	echo "</tr>";
	echo "</table>";
	echo "<p><input type='submit' value='Valider'></p>";
	echo "</form>";
}

function validateLogin($login, $password) {
	if ($login == "Jack" && $password == "inf2005")
		return true;
	return false;
}

function checkLogin() {
	if (!isset($_COOKIE["login"]) || !isset($_COOKIE["password"]))
		return false;
	
	return validateLogin($_COOKIE["login"], $_COOKIE["password"]);
}

$loginSucceeded = checkLogin();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>Cookie serveur</title>
<script type="text/javascript">
<?php require("script.js"); ?>
</script>
</head>
<body>
	<div>
	<?php
		if ($loginSucceeded)
			displayDisconnect();
		else
			displayLoginPrompt();
	?>
	</div>
</body>
</html>