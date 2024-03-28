
<?php

if ( ! file_exists('../../.env')) {
die('Geen .env bestand gevonden');
}
$envSettings
=
parse_ini_file('../../.env');

define('DB_SCHEMA', (isset($envSettings['DB_SCHEMA_NAME'])) ? $envSettings['DB_SCHEMA_NAME'] : 'example');
 define('DB_USER', (isset($envSettings['DB_USER'])) ? $envSettings['DB_USER'] : 'username');
  define('DB_PASSWORD', (isset($envSettings['DB_PASSWORD'])) ? $envSettings['DB_PASSWORD'] : 'pass');
  define('DB_HOST', (isset($envSettings['DB_HOST'])) ? $envSettings['DB_HOST']: 'mariadb');