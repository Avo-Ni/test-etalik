Application d'Import Excel
Cette application vous permet d'importer des données à partir d'un fichier Excel dans une base de données. Elle est basée sur Symfony 5.4.

Installation
Cloner le référentiel

       git clone https://github.com/votre-utilisateur/votre-projet.git

Installer les dépendances

        composer install

Configurer la base de données

Créez une base de données MySQL et configurez les informations d'accès dans le fichier .env.

        DATABASE_URL=mysql://user:password@127.0.0.1:3306/exceldata

Créer la structure de la base de données

Utilisez les commandes Symfony pour créer la structure de la base de données à partir des entités :

        php bin/console doctrine:database:create
        php bin/console doctrine:migrations:migrate

Utilisation

Exécuter l'application

Lancez le serveur Symfony en utilisant la commande suivante :

        symfony serve

L'application sera accessible à l'adresse http://localhost:8000.

Importer des données Excel

Rendez-vous sur la page d'accueil de l'application à l'adresse http://localhost:8000. Vous verrez un formulaire d'importation où vous pouvez sélectionner un fichier Excel à importer. Une fois le fichier sélectionné, cliquez sur le bouton "Import" pour importer les données dans la base de données.

Visualiser les données importées

Une fois les données importées, vous pouvez accéder à la liste des données importées en visitant la page http://localhost:8000/list. Vous verrez la liste des données importées avec des fonctionnalités pour les modifier ou les supprimer selon vos besoins.


Si vous avez besoin d'une structure de base de données préremplie, vous pouvez importer le fichier `bdd.sql` inclus dans ce projet.

