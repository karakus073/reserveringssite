<?php

ini_set('display_errors', 1);

error_reporting(E_ALL);



$db_hostname = 'localhost';

$db_username = '87250';

$db_password = 'Putsebocht72';

$db_database = 'login_beroeps';



$mysqli = mysqli_connect($db_hostname, $db_username, $db_password, $db_database);



if  (!$mysqli){

    echo "FOUT: geen connectie naar database. <br>";

    echo "Error: " . mysqli_connect_connect_error() . "<br/>";

}



else{

    echo "Verbinding met " . $db_database . " is gemaakt! <br/>";

}




?>