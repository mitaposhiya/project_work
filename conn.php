<?php


$server = "localhost";
$user = 'root';
$pass = '';
$db = 'gym';


$conn = new mysqli($server, $user, $pass, $db);


if ($conn->connect_error) {
    die(''. $conn->connect_error);
}

    

?>
