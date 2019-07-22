<?php


// DOMAIN NAME OF THE WEBSITE----------
define('BASE_URL','http://localhost/phpApi/startup/');

// DOMAIN NAME OF THE ADMIN'S WEBSITE----------
define('ADMIN_URL', BASE_URL.'admin/');



// SQL CONFIGURATION------------
define('HOST','localhost');
define('USER','root');
define('PASS','');

// DATA CONFIGURATION=============
define('DBNAME','newdb');

// SHORTCUT KEYS-------------
define('API','api/');

include API.'dbh.php';
include API.'User.php';
include API.'viewUser.php';

$sql = new dbh;
$sqlUser = new User;
$viewUser = new ViewUser;

?>