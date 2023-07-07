<?php
$host = 'DESKTOP-AL98064';
$db = 'calc_media';
$user = 'root@localhost';
$pass = 'CarlosSitta'; 

$conn = new mysqli($host, $user, $pass, $db);


if ($conn->connect_error) {
    die("Falha na conexão: " . $conn->connect_error);
}

echo "Conexão bem-sucedida!";
?>