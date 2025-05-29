<?php
$host = 'localhost';
$dbname = 'axtron';
$username = 'root'; 
$password = ''; 

$conn = new mysqli($host, $username, $password, $dbname);
    if ($conn->connect_error) {
        die("Erro: " . $conn->connect_error);
    }


?>
