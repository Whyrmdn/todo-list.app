<?php
include 'db.php';

if (isset($_GET['id'])) {
    $task_id = (int)$_GET['id'];
    $conn->query("DELETE FROM tasks WHERE id = $task_id");
}

header('Location: index.php');
exit;
?>
