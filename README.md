eshop-2018
==========

Code source du TP6 – Symfony3 : Créer un catalogue en ligne.

https://changuelsami.wordpress.com/2016/09/25/info4-web-avance/

Comment installer le projet ?

Dans le dossier de travail cloner le dépôt Git et configurer l'accès à la base de données locale :

$ git clone https://github.com/changuelsami/catalogue-symfony3.git

Ca va créer un sous-dossier appelé /catalogue-symfony3/ :

$ cd catalogue-symfony3

Lancer composer pour télécharger Symfony 3.4 :

$ composer update

Créer la base de données : 

$ php bin/console doctrine:database:create

Créer les tables : 

$ php bin/console doctrine:schema:create

Démarrer le serveur :

$ php bin/console server:run

Le front est accessible via l'url /ehsop (la racine / fera une redirection auto)
Le back office est accessible via l'url /ehsop/admin
