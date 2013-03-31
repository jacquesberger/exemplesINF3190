<?php
require("table.php");
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html>
<head>
<meta http-equiv="content-type" content="text/html; charset=utf-8">
<title>INF2005 : Exemple Ajax</title>
<link href="style.css" rel="stylesheet" type="text/css">
<script type="text/javascript">
<?php require("script.js"); ?>
</script>
</head>
<body>
	<div id="header">
		<div id="logo">
			<h1>INF2005</h1>
			<h2>Programmation web</h2>
		</div>
	</div>

	<div id="page">
		<div id="sidebar">
			<ul>
				<li>
					<h2>Utilisation</h2>
					<p>Appuyez sur le bouton de rafraîchissement afin de recharger
						le tableau avec de toutes nouvelles valeurs aléatoires.</p>
				</li>

				<li>
					<h2>Ajax</h2>
					<p>La première version du site sera faite avec full page
						refresh.</p>
					<p>La deuxième version du site sera faite sans full page
						refresh.</p>
				</li>
			</ul>
		</div>

		<div id="content">
			<div class="post">
				<p class="meta">
					<span class="date">Vendredi, le 18 novembre 2011 18:00</span>
					Publié par <a href="#">Jack</a>
				</p>
				<h2 class="title">Valeurs aléatoires</h2>
				<div class="entry">
					<div id="fortable">
						<?php echo generateTable(); ?>
					</div>
					<button onclick="refreshTable();">Rafraîchir</button>
				</div>
			</div>

			<div id="footer">
				<p>
					Copyright &copy; 2011 Jacques Berger. Tous droits réservés. Design
					par <a href="http://www.freecsstemplates.org/">Free CSS
						Templates</a>.
				</p>
			</div>
		</div>
	</div>
</body>
</html>