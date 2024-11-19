il manque:
-decqler la racine de l'index dans un sous dossier router
-audio
-photos
-conversations privees
-pieces jointes
-vu; ecrit...
-telecharger conversation
-encodage

README - Application de messagerie
Description
Ce projet est une simple application de messagerie web qui permet aux utilisateurs de s'envoyer des messages en temps réel. L'application utilise PHP pour la gestion des sessions et des routes, MySQL pour le stockage des messages, et JavaScript (AJAX) pour les interactions en temps réel sans recharger la page.

Fonctionnalités
Connexion d'utilisateur :
Les utilisateurs peuvent se connecter en entrant un pseudonyme. La session utilisateur est gérée à l'aide de $_SESSION.

Envoi et réception de messages :

Les messages envoyés sont enregistrés dans une base de données MySQL.
Les messages sont affichés en temps réel grâce à des requêtes AJAX.
Interface utilisateur dynamique :

Le bouton "Envoyer" n'apparaît que si du texte est saisi dans la zone de message.
La zone des messages est automatiquement défilée vers le bas pour afficher les nouveaux messages.
Déconnexion :
Les utilisateurs peuvent se déconnecter, ce qui détruit leur session.

Structure du projet
Fichiers principaux
index.php :
Point d'entrée principal qui gère les routes et initialise l'application.

main.php :
Affiche l'interface principale de l'application après la connexion de l'utilisateur.

js.js :
Contient le code JavaScript pour les interactions dynamiques et le rafraîchissement des messages en temps réel.

model.php :
Gère les interactions avec la base de données, notamment l'insertion des nouveaux messages.

get.php :
Fichier chargé via AJAX pour récupérer et afficher les messages en temps réel.

style.css :
Fichier de styles pour la mise en page de l'interface utilisateur.

Installation
Cloner le projet :

bash
Copier le code
git clone <url_du_projet>
cd <nom_du_projet>
Configurer la base de données :

Créez une base de données MySQL nommée databasemessages.
Exécutez le script SQL fourni dans le projet pour créer la table messagestable et insérer des données de test.
Configurer l'environnement PHP :

Assurez-vous que PHP et MySQL sont installés sur votre machine.
Configurez un serveur local comme XAMPP, WAMP ou MAMP.
Placez les fichiers du projet dans le dossier htdocs ou équivalent.
Démarrer le serveur :

Lancez votre serveur local.
Accédez à l'application dans votre navigateur à l'adresse http://localhost/<nom_du_projet>.
Dépendances
PHP (Version >= 7.4)
MySQL (Version >= 5.7)
JavaScript (Navigateur moderne avec prise en charge d'ES6)
AltoRouter : Utilisé pour la gestion des routes dans PHP.
Utilisation
Accédez à la page d'accueil.
Entrez un pseudonyme pour vous connecter.
Envoyez des messages via le formulaire de saisie.
Visualisez les messages en temps réel dans l'interface.
Cliquez sur le bouton "Déconnexion" pour quitter la session.
Améliorations possibles
Sécurité :

Ajouter une validation approfondie des entrées pour prévenir les attaques XSS et injections SQL.
Implémenter des tokens CSRF pour sécuriser les formulaires.
Performance :

Limiter les messages chargés à un nombre raisonnable et ajouter une pagination.
Interface utilisateur :

Améliorer le design avec des frameworks CSS comme Bootstrap ou Tailwind.
Ajouter des notifications pour les nouveaux messages.
Fonctionnalités supplémentaires :

Implémenter des fonctionnalités de chat privé entre utilisateurs.
Ajouter la gestion des fichiers et des emojis dans les messages.
Auteur
Ce projet a été conçu dans un but éducatif pour apprendre les bases de la gestion d'une application de messagerie avec PHP, MySQL, et AJAX.
