<?php

define('DB_SERVER', 'localhost');
define('DB_USERNAME', '87964');
define('DB_PASSWORD', 'Sennacollin1999');
define('DB_NAME', '87964-beroeps');
 
$link = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);
 
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
?>