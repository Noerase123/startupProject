<?php
session_start();

// DOMAIN NAME OF THE WEBSITE----------
define('BASE_URL','http://localhost/startupProject/');

// DOMAIN NAME OF THE ADMIN'S WEBSITE----------
define('ADMIN_URL', BASE_URL.'admin/');



// SQL CONFIGURATION------------
define('HOST','localhost');
define('USER','root');
define('PASS','');

// DATA CONFIGURATION=============
define('DBNAME','db_testSite');
  
// SHORTCUT KEYS-------------
define('API','api/');

include API.'dbh.php';
include API.'User.php';
include API.'viewUser.php';
include API.'loginUser.php';

$sql = new dbh;
$sqlUser = new User;
$viewUser = new ViewUser;
$loginUser = new loginUser;

?>