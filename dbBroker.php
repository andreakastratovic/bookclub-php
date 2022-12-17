<?php
$host = "localhost";
$db = "users";
$user = "root";
$pass = "";

$conn = new mysqli($host,$user,$pass,$db);

if (!$conn) {

    echo "Connection failed!";
    
}

?>