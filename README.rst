Demo Loic Audiger
==============

Cette application a pour but d'exposer son code source à d'éventuels recruteurs.

Stack : PHP7, SILEX, MAMP, CSS3, HTML5

Installation
----------------------------

.. code-block:: console

    $ composer install

Ouvrir Mamp sur le fichier ./web/index.php

Pour lancer les test unitaires :

.. code-block:: console

    $ ./vendor/bin/phpunit

Structure
----------------------------
Les règles business ainsi que les tests unitaires se situent dans les dossiers src/common etr src/contexts
Le reste des fichiers est affilié au framework Silex (J'ai ajouté du code le fichier src/controllers.php
et les fichiers dans ./templates/* )