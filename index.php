<?php include 'db.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>To-Do List</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container mt-5">
    <h1 class="text-center">To-Do List</h1>
    <form action="add_task.php" method="post" class="mb-3">
        <div class="input-group">
            <input type="text" name="task_name" class="form-control" placeholder="Add a new task" required>
            <div class="input-group-append">
                <button type="submit" class="btn btn-primary">Add Task</button>
            </div>
        </div>
    </form>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Task</th>
                <th>Status</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        <?php
        $result = $conn->query("SELECT * FROM tasks");
        while ($row = $result->fetch_assoc()):
        ?>
            <tr>
                <td><?= htmlspecialchars($row['task_name']); ?></td>
                <td><?= $row['status'] ? 'Completed' : 'Pending'; ?></td>
                <td>
                    <a href="update_task.php?id=<?= $row['id']; ?>" class="btn btn-success btn-sm">Toggle Status</a>
                    <a href="delete_task.php?id=<?= $row['id']; ?>" class="btn btn-danger btn-sm">Delete</a>
                </td>
            </tr>
        <?php endwhile; ?>
        </tbody>
    </table>
</div>
</body>
</html>
