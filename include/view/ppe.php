<h1>PPE BTS SIO</h1>
<h2>Développement d'une application légère et lourde</h2>
<p>
BIBLIOTHEQUE DE PRET PARTICIPATIVE ENTRE PARTICULIER




Sommaire :

Contexte
Présentation du client
Demande du client 
Situation actuelle
Public cible
MVP
Rôles

Présentation du projet 
But de l’application
Architecture de l’application
Listes des technologies
Budget
Arborescence de l’application
Dictionnaire des données
MCD
User Stories
Protection des données
Préventions des risques


Calendrier


Contexte :


Présentation du client

La mairie française de Pouzy-Mésangy  est une collectivité territoriale qui a pour mission de satisfaire les besoins quotidiens de la population.

Demande du client 

"Proposez nous une solution” Monique Guili

En cette période de covid, les habitants sont en manque de divertissements, la mairie veut créer une plateforme légère et lourde pour un service de prêt de livre pour les habitants de Pouzy-Mésangy.

“Nous voulons une analyse technique et une démo du projet” Jean-Luc Pignon

Situation actuelle

Il existe un programme Java qui visualise une base de données. Cette même base de données  contient une seule table.

Public cible

Notre cible est principalement et strictement les habitants de Pouzy-Mésangy.
MVP (Minimum Viable Product)

Notre projet est clair, garantir une fonctionnalité de prêt de livre entre particuliers habitant dans le même village.

Les fonctionnalités doivent pouvoir permettre  :

Pour un administré :
Créer un compte
Refaire son mot de passe
Voir une liste des livres
Ajouter un livre
Réserver un livre
Modifier un livre
Voir les livres emprunté

Pour la mairie :
consulter la liste des livres
modifier le statut d’un livre
générer le code de création de compte d’utilisateur


Présentation du projet 

But de l’application

Il y a 2 versions de l’applications :
-Version légère (web)
-Version lourde (Java)

Web : Créer un compte , voir les livres , réserver les livres, ajouter les livres.
Java : Utilitaire de gestion

Architecture de l’application

Le site Web interagit avec l’API 
Le logiciel interagit avec l’API
L’API interagit avec la base de données


Listes des technologies

Version légère : HTML / CSS / PHP / JS / Bootstrap
Version lourde :  Java / C#
Base de données : SQL

Arborescence de l’application


Version Web :
Version Application :


Protection des données
Confidentialité 
La confidentialité vise à assurer que les données ne sont accessibles qu'aux seules personnes  autorisées. 
Exemple : la connexion au site web d'un client ne lui donne pas accès à la liste des clients et des  factures. 
Intégrité 
Assurer l'intégrité des données qui consiste à faire en sorte que les données ne puissent être modifiées lors de leur utilisation. 
Exemple : le protocole de cryptage SSL permet de s'assurer que les données ne sont pas modifiées  pendant l'échange. 
Disponibilité 
La disponibilité consiste à assurer l'accès ininterrompu aux données 
Exemple : si le serveur web ne fonctionne plus, un autre serveur prend le relai.



-Prévention des risques

Sauvegarde 

Assure une sauvegarde chaque jour de la base de données de My Bibliothèque Online


Sanctuarisation 

Choisir les éléments à protéger en priorité dans les données personnelles. (Nom de famille, adresse, téléphone, mot de passe)

Site WEB:
lien ...

logiciel:
photo


</p>