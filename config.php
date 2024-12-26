<?php
$dbhost="localhost";
$dbuser="root";
$dbpassword="";
$dbname="php_crud";


$connection = mysqli_connect($dbhost,$dbuser,$dbpassword,$dbname);

if(!$connection){
    die("Could not connect to database".mysqli_connect_errno());
}

?>