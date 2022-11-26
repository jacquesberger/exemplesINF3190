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

2. Créez une application Flask qui affiche un moteur de recherche (un champ texte
   avec un bouton pour lancer la recherche).

3. Créez une route qui serait invoquée avec une méthode GET et un paramètre
   `q` contenant le critère de recherche. Cette route devrait produire les
   résultats de la recherche et l'envoyer au fureteur. Le résultat de la
   recherche sera la liste des cours qui contiennent le contenu du paramètre `q`
   dans le titre du cours.

4. Modifiez la route afin d'invoquer le script de recherche à l'aide d'une
   requête Ajax faite avec un `XMLHttpRequest`.

5. Réécrivez l'exercice avec la fonction `fetch`.
