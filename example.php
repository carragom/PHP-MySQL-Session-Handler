<?php
//The config file where you store your database password should be outside of
//your document root
require_once('dbconfig.php');
require_once('SessionHandler.php');

//This will create a session handler object and register it for all session operations.
new SessionHandler($dbhost, $dbuser, $dbpass, $dbname);

//Same but keeping a reference to it.
//$sh = new SessionHandler($dbhost, $dbuser, $dbpass, $dbname);
echo 'Creating Session...';
session_start();
echo 'sucess<br>';
echo 'Creating new session variable...';
$_SESSION['myvar'] = uniqid();
echo 'sucess<br>';
echo 'Retrieving new session variable value...';
echo $_SESSION['myvar']. '<br>';
echo 'Removing new session variable ...';
unset($_SESSION['myvar']);
echo 'sucess<br>';
echo 'Removing Session...';
session_destroy();
echo 'sucess<br>';
?>
