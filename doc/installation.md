Installation
----------------------------------

_(Temps de déploiement estimé : 5 min dans le meilleur des cas)_

### Sous Linux et OS X :

**Pré-requis :**  PHP >= 5.4, MySQL, un client Git et une bonne connexion à internet.

> Pour installer ces paquets, ou juste pour vérifier qu'ils sont déjà présents, sur un serveur Debian ou dérivé tapez dans une console : `sudo apt-get install  php5 mysql-server php5-mysql git`

1. Ouvrez une console et, dans le dossier souhaité, tapez`git clone https://github.com/Artemis-Haven/family-tree.git`

2. Entrez dans le dossier sources avec `cd sources`

3. Si besoin, éditez le fichier php.ini pour allouer suffisament de mémoire pour php

4. Installez les dépendances avec `php composer.phar install`

5. Pendant l'installation, remplir les champs demandés (ceux de `parameters.yml`)

6. Réglez les problèmes de cache en faisant `sudo chmod 777 -R app/logs app/cache && sudo php app/console cache:clear && sudo chmod 777 -R app/logs app/cache`

8. Générez la base de données avec la commande `sudo php app/console doctrine:database:create && sudo php app/console doctrine:schema:update --force`

10. Si tout s'est bien passé, le site est désormais opérationnel. Pour lancer le serveur php, tapez `php server:run`. Le serveur sera accessible en local à l'url `http://localhost:8000`
