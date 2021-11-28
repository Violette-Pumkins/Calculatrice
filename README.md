# Calculatrice
 Calculatrice test pour bricozor

Fonctions
- Addition
- Soustraction
- Multiplicaiton
- Division

- Sauvegarder le résultat
- Afficher l'historique

Inspiré du pattern MVC utilisé avec:
- model: Calculatrice.class.php (fonctions de traitement des données et sauvegarde des résultats)
- view: viewcalc.php, viewres.php (view reliées à mon model)
- index.php (controller)
- historique.txt (bdd)

## routing
 Le controller prend un paramètre GET appelé 'action' qui lui indique son statut.
 Donc quand action='sauvegarder' cela enclenche la procédure de sauvegarde dans la bdd.
 Une procédure récupère les données nécessaire, met en application une fonction donnée puis redirige la page.
 Un système de session est utilisé pour faire passer les pinformation d'un model à une vue, et inversement.

## framework utilisé
 Bootstrap 4 utilisé pour l'esthétique de l'application
 
 Temps de réalisation: 
 - 1h min pour créer mes fonctions opérations dans mon model et mettre en place mon controller
 - 1h30 pour créer la sauvegarde, la récupération de la liste et vérifier le bon fonctioneement de l'application
 - 30 min pour le vérification de la mise en page du code, la documentation et le dépôt sur github.
 
