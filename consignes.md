# Créez un média collaboratif en PHP et MySQL

Bonjour à tous et bienvenue pour ce premier projet de notre second cycle d'apprentissage.
Comme indiqué dans le titre vous allez être amenés à créer une plateforme permettant aux utilisateurs de poster des articles.
À titre d'exemple voici quelques sites se basant sur ce principe:

1. Medium: https://medium.com/
2. Dev.to: https://dev.to/
3. Reddit: https://www.reddit.com/

## Votre client

Je vous présente Jean Ratpahune, Sam Shanboule et Jenny Peurin. Une joyeuse bande de jeunes entrepreneurs avec une bonne idée: créer un média collaboratif, une plateforme sur laquelle les utilisateurs pourront délivrer leurs connaissances sur des sujets divers sous format d'articles et de billets d'humeur.
Ils sont tout trois plein d'entrain et ont déjà réussi à démarcher partenariat et accompagnement pour leur projet, mais aucun d'eux n'a de compétence en programmation.
Vous voici donc recruté pour réaliser leur cahier des charges.

## Le fameux sacro-saint cahier

Nos trois porteurs de projets ont décri de manière spécifique leurs besoins.

### Les fonctionnalités:

- La possibilité pour un potentiel utilisateur de **s'inscrire** et de **se connecter** sur la plateforme
- L'utilisateur enregistré simple peut **publier** des articles, les **modifier**, les **supprimer**, **consulter** les profiles des autres utilisateurs
- L'utilisateur non enregistré peut uniquement consulter les articles et le profile de l'utilisateur simple
- La page d'accueil doit **recenser** les articles
- Chaque utilisateur a le droit de **modifier** ses informations via un onglet "settings"
- Chaque profile d'utilisateur **contient** l'ensemble de leurs articles sous forme de vignettes titre / image
- Chacune de ces vignettes comporte un **lien** vers l'article complet auquel **une page unique est dédiée**

### L'UI / UX design:

Ils se remettent entièrement à votre designer concernant l'aspect et expérience utilisateur de leur plateforme
Cependant votre projet devra être créé dans l'optique **"mobile first"** avec un design **responsive**.

### Les technologies:

- PHP
- MySQL
- Laragon (serveur local)
- HTML5
- CSS - Media Queries
- Javascript

## Le déroulement de votre projet

### Étape 1

La première étape est de distribuer les rôles au sein de votre groupe
Posez vous les bonnes questions:

- Ai-je envie d'explorer le design et l'intégration ?
- Ai-je envie de développer la logique client de l'application ?
- Ou plutôt la logique serveur ?
- Ou les deux ?
- Ai-je envie d'explorer la gestion du projet ?
- Ai-je envie de travailler sur l'analyse fonctionnelle et le testing des fonctionnalités ?

Concertez vous, prenez le temps de bien définir vos rôles par écrit.

### Étape 2

Maintenant que les rôles sont répartis il s'agit de découper votre projet sous forme de fonctionnalités et tâches à remplir pour créer ces dernières.
Je vous conseille fortement de la réaliser d'abord sur papier / outils de traitement de texte.

Pour vous aider quelques liens utiles:

Trello vous permet de créer un système de ticket et de les assigner aux membre de votre équipe, vous pouvez découper le tableau par fonctionnalités puis par tâche: https://trello.com/fr

Un très bon PDF sur la gestion de projet : http://perso.citi.insa-lyon.fr/sfrenot/cours/PI/cours/4TCCMPI-Gestion-de-projet-User-stories-v1.1-2014.pdf

Un exemple d'analyse fonctionnelle : //TODO

### Etape 3

Concevoir un wireframe.
Le wireframe est une version épurée de ce qui constituera votre site.
Les pages, les interractions utilisateurs et les divers éléments constituants votre application 
Voici un exemple de wireframe: http://glossaire.infowebmaster.fr/wireframe-site-web/

### Etape 4

Conception de votre application.
Vous travaillez en synchronisation à l'élaboration des fonctionnalités, du design et du template HTML.

#### Tips et astuces

Le back-end n'est pas encore disponible? Créez un fichier "mock". Le fichier mock est un fichier au format JSON qui contiendra des "fake data", des données inventées pour tester l'affichage et le fonctionnement de vos services front-end
Le front-end n'est pas encore disponible? Testez vos endpoint et vos controllers à l'aide de postman! Il s'agit d'un logiciel permettant d'envoyer des requêtes client vers votre serveur et de vous afficher la réponse! https://www.postman.com/downloads/

## Objectifs hebdomadaires

### Semaine 1

- Réaliser l'analyse fonctionnelle
- Wireframing
- Schéma base de donnée
- Architecture du projet,mise en place de l'environnement
- Création de la DB: table utilisateur
- Logique métier: Inscription / Connexion utilisateur
- Routes client / serveur: Inscription / Connexion 
-  Design / Intégration page de connexion / Inscription

### Semaine 2 

- DB: Table articles + table pivot Articles/utilisateurs
- Routes client / servuer : Accueil 
- Logique métier: Création des articles
- Logique métier: Accueil de la plateforme
- Logique métier: Profil utilisateur (Pseudo + Articles sous forme de vignettes)
- Design / Intégration page d'acceuil, profil utilisateur, formulaire de création d'article

### Semaine 3 

- Logique métier: Settings de l'utilisateur -> éditer ses informations (données de connexion)
- Logique métier: Lien vers l'article complet
- Logique métier: Edition / Suppression des articles
- Design / Intégration formulaire d'édition, page de settings
- Rédaction README.md: toutes les informations nécessaires à la reprise remise de votre projet
- Déployement sur heroku

## Compétences à acquérir au terme de ce projet

- PHP niveau 1
- HTML/CSS niveau 2
- CRUD Back et Front niveau 1
- Analyse fonctionelle niveau 1
- Wireframing niveau 1
- Maquette niveau 2
- Routing client / serveur niveau 1
- Création de base de donnée niveau 1
- Gestion de projet niveau 1
- Méthode scrum niveau 1
- Rédaction niveau 1