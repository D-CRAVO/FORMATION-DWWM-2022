<?php
phpinfo();
/* 
Data source name (connectionString)
- host = adresse du serveur de base de données
- port = port (si ce n'est pas le port par défaut)
- dbname = le nom de la base de données
- charset = le jeu de caractères (utf-8 par exemple)
*/

$dsn = 'mysql:host=localhost;port=3306;dbname=db_2204_users;charset=utf8mb4';

$connexion = new PDO($dsn, 'user2204', 'azer');
