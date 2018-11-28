<?php
define('DB_HOST', 'localhost');
define('DB_NAME', 'db_minisite');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', '');
try {
    $db = new PDO("mysql:host=".DB_HOST .";dbname=".DB_NAME, DB_USERNAME, DB_PASSWORD,
        array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8'));

    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

}catch(PDOException $e){
    die('erreur: '.$e->getMessage());
}
