<?php

define('db_driver', 'pgsql');
define('db_host', 'postgresql');
define('db_name', 'adbike');
define('db_user', 'adbike');
define('db_password', 'adbike');

$db = new PDO(db_driver . ":dbname=" . db_name . ";host=" . db_host,
    db_name, db_password);