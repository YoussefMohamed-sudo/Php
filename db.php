<?php

$host = "localhost";
$user = "root";
$password = "Password";
$dbname = "db_name";
$port = NULL;

$conn = mysqli_connect($host, $user, $password, $dbname);

if(!$conn){
    die("Connection failed: " . mysqli_connect_error());
}

?>