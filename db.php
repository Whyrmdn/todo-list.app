<?php
$host = 'localhost';
$user = 'root'; // default username for XAMPP
$pass = ''; // default password for XAMPP
$db_name = 'todo_list';

$conn = new mysqli($host, $user, $pass, $db_name);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
