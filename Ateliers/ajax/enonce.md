Ajax
====

Ajax est un paradigme d'échange de données entre un fureteur et un serveur. La
requête asynchrone est faite à partir de code Javascript exécuté par le
fureteur.

Objectifs
---------

* Manipuler différents types de requête Ajax.

Exercices
---------

1. Créez un fichier texte contenant des titres de cours.

2. Créez une page `index.php` qui affiche un moteur de recherche (un champ texte
   avec un bouton pour lancer la recherche).

3. Créez un script PHP qui serait invoqué avec une méthode GET et un paramètre
   `q` contenant le critère de recherche. Ce script devrait produire les
   résultats de la recherche et l'envoyer au fureteur. Le résultat de la
   recherche sera la liste des cours qui contiennent le contenu du paramètre `q`
   dans le titre du cours.

4. Modifiez `index.php` afin d'invoquer le script de recherche à l'aide d'une
   requête Ajax faites avec un `XMLHttpRequest`.

5. Réécrivez l'exercice avec la fonction `fetch`.
