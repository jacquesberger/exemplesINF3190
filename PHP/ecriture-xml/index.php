<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Écriture XML</title>
  </head>
  <body>
    <div>
      <form action="serveur.php" method="post">
        <table>
          <tbody>
            <tr>
              <td><label for="nomComplet">Nom complet :</label></td>
              <td><input type="text" name="name" id="nomComplet"></td>
            </tr>
            <tr>
              <td><label for="age">Âge :</label></td>
              <td><input type="text" name="age" id="age"></td>
            </tr>
          </tbody>
        </table>
        <input type="submit" value="Envoyer les données">
      </form>
    </div>
  </body>
</html>
