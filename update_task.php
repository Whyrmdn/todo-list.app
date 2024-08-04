<?php
include 'db.php';

if (isset($_GET['id'])) {
    $task_id = (int)$_GET['id'];
    $result = $conn->query("SELECT status FROM tasks WHERE id = $task_id");
    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $new_status = $row['status'] ? 0 : 1;
        $conn->query("UPDATE tasks SET status = $new_status WHERE id = $task_id");
    }
}

header('Location: index.php');
exit;
?>
