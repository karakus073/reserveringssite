<?php

define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'zekir2');
define('DB_PASSWORD', 'Putsebocht72');
define('DB_NAME', 'login_beroeps');
 
$link = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);
 
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
?>