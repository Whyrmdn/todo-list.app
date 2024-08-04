<?php
include 'db.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $task_name = $conn->real_escape_string($_POST['task_name']);
    $conn->query("INSERT INTO tasks (task_name) VALUES ('$task_name')");
}

header('Location: index.php');
exit;
?>
