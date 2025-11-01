<?php include 'db.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Simple To-Do App</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<div class="container">
    <h1>📝 To-Do List</h1>

    <form action="add.php" method="POST">
        <input type="text" name="title" placeholder="Add a new task..." required>
        <button type="submit">Add</button>
    </form>

    <ul>
        <?php
        $sql = "SELECT * FROM tasks ORDER BY created_at DESC";
        $result = $conn->query($sql);
        while ($row = $result->fetch_assoc()) {
            echo "<li>";
            echo $row['is_done'] ? "<s>{$row['title']}</s>" : $row['title'];
            echo " <a href='update.php?id={$row['id']}'>✔️</a>";
            echo " <a href='delete.php?id={$row['id']}'>🗑️</a>";
            echo "</li>";
        }
        ?>
    </ul>
</div>
</body>
</html>
