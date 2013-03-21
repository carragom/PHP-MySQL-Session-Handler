<?php
require_once('SessionHandler.php');

//This will create a session handler object and register it for all session operations.
new SessionHandler('localhost', 'username', 'password', 'database');

//Same but keeping a reference to it.
$sh = new SessionHandler('localhost', 'username', 'password', 'database');

session_start();

?>
