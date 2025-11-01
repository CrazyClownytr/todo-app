<?php
include 'db.php';

if (isset($_POST['title'])) {
    $title = $_POST['title'];
    $sql = "INSERT INTO tasks (title) VALUES ('$title')";
    $conn->query($sql);
}

header('Location: index.php');
exit;
?>
