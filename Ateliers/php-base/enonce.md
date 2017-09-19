Introduction au PHP
===================

Cet atelier vous sera utile pour mettre en pratique les bases du PHP. Il n'y a
aucune interaction entre le fureteur et le serveur. L'aspect visuel n'est pas
important pour le moment. Mettez vos efforts à comprendre le fonctionnement du
PHP.

Objectifs
---------

* Apprivoiser le PHP.
* Faire des manipulations de _strings_ et de fichiers textes en PHP.

Exercices
---------

1. Placez un fichier PHP nommé `index.php` dans votre répertoire de projet. Dans
   ce fichier, placez le code nécessaire pour envoyer au fureteur un document
   HTML simple avec un titre _Liste de cours_ dans un élément `h1`.

2. Dans le même répertoire, ajoutez un fichier texte contenant les lignes
   suivantes :
   ```
   20171 INF4170-50 Architecture des ordinateurs
   20171 INF2015-40 Developpement de logiciels dans un environnement Agile
   20172 INF5151-20 Genie logiciel : Analyse et modelisation
   20172 INF5153-20 Genie logiciel : Conception
   20173 INF2005-40 Programmation web
   ```

   La première donnée correspond à un trimestre. Les 4 premiers caractères sont
   l'année et le dernier caractères est le numéro du trimestre. 1 veut dire
   Hiver, 2 veut dire Été, 3 veut dire Automne.

   La deuxième donnée est le sigle d'un cours avec le numéro du groupe.

   La troisième donnée est le titre du cours.

3. Placez le code nécessaire dans index.php pour lire le fichier texte et
   générer un tableau contenant une rangée d'en-têtes et une rangée pour chaque
   ligne du fichier texte. Les colonnes sont les suivantes (dans cet ordre) :
   * le sigle du cours;
   * le groupe;
   * l'année du cours;
   * le trimestre en format texte (écrire 'Été', 'Hiver' ou 'Automne');
   * le titre du cours.

   Si vous avez placé des caractères accentués dans votre fichier texte, il est
   possible que vous ayez des problèmes avec ces caractères dans votre fureteur.
   Ignorez-les pour l'instant.

4. Ajoutez un morceau de texte à la fin de la page indiquant combien de cours il
   y a dans le tableau.
