Description

Ce projet vise à créer un réseau social pour les étudiants de notre promotion, offrant des fonctionnalités similaires à celles de Twitter. Les utilisateurs peuvent publier des tweets, suivre d'autres utilisateurs, envoyer des messages privés, et plus encore. L'application est conçue pour être responsive et accessible sur différents appareils.

Usage

    Créez un compte utilisateur ou connectez-vous avec vos identifiants.
    Publiez des tweets, suivez d'autres utilisateurs, et explorez les fonctionnalités disponibles.
    Utilisez la barre de recherche pour trouver des hashtags ou des utilisateurs.

Fonctionnalités

    Compte membre : Inscription et connexion des utilisateurs.
    Tweets : Publication de tweets avec un maximum de 140 caractères.
    Hashtags : Intégration de hashtags (#) cliquables qui mènent à une page de recherche.
    Mentions : Mentionner des utilisateurs (@pseudo) qui mènent vers leur profil, avec suggestions de profils en temps réel.
    Réponses et Retweets : Possibilité de répondre à des tweets et de les retweeter.
    Recherche de Tags : Section de recherche dédiée aux hashtags.
    Suivre des Membres : Fonctionnalité pour suivre et gérer les utilisateurs.
    Thème personnalisable : Choix de thèmes pour personnaliser l'affichage.
    Liste de Followers et Following : Affichage des abonnés et des utilisateurs suivis.
    Timeline Rafraîchie Automatiquement : Mise à jour en temps réel de la timeline.
    Édition de Profil : Possibilité de mettre à jour les informations du profil.
    Messagerie Privée : Système de messagerie pour communiquer avec d'autres utilisateurs.
    Ajout de Photos : Téléversement d'images dans les tweets avec réduction d'URL.

Base de Données

La base de données est commune à tous les groupes. Le schéma relationnel doit être conforme au fichier common-database.sql présent à la racine du projet. Assurez-vous que tous les groupes utilisent la même structure pour éviter toute pénalité lors de la soutenance.
Authentification

Les mots de passe utilisateurs sont stockés de manière sécurisée en utilisant le hachage ripemd160 avec un salt commun : vive le projet tweet_academy.
Suivre et Être Suivi

Les utilisateurs peuvent consulter et rechercher des profils. Chaque profil contient un lien pour suivre l'utilisateur. Sur votre propre profil, vous pouvez voir vos abonnés (followers) et les utilisateurs que vous suivez (following).
Hashtags et Mentions

Les tweets contenant des hashtags sont affichés sous forme de liens vers la recherche de tags. Les mentions d'autres utilisateurs sont également cliquables, affichant des suggestions en temps réel à chaque caractère saisi après le @.
Ajout de Photos

Les utilisateurs peuvent ajouter des photos à leurs tweets. L'URL de la photo sera réduite à l'aide d'un service similaire à http://goo.gl/ pour réduire la taille de l'URL.
Technologies Utilisées

    Front-end : HTML, CSS, JavaScript, Micro-framework CSS Skeleton
    Back-end : PHP, MySQL
    Hachage de mots de passe : ripemd160
