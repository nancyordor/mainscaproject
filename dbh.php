<?php
// localhost database connection
// define('DB_SERVER', 'localhost');
// define('DB_USERNAME', 'root');
// define('DB_PASSWORD', '');
// define('DB_NAME', 'mainscaproject');
 
// remote database connection
define('DB_SERVER', 'remotemysql.com');
define('DB_USERNAME', 'JH2gC9TryT');
define('DB_PASSWORD', 'g17u6CQYFp');
define('DB_NAME', 'mainscaproject');

/* Attempt to connect to MySQL database */
$link = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
?>