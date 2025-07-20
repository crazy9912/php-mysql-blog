<?php session_start(); if (!$_SESSION['loggedin']) { header('Location: login.php'); exit; } ?>
<a href='add-post.php'>Add New Post</a> | <a href='logout.php'>Logout</a><br><br>
<?php include 'db.php';
$result = $conn->query('SELECT * FROM posts');
while ($row = $result->fetch_assoc()) {
    echo '<h2>' . htmlspecialchars($row['title']) . '</h2>';
    echo '<a href="edit-post.php?id=' . $row['id'] . '">Edit</a> | ';
    echo '<a href="delete-post.php?id=' . $row['id'] . '">Delete</a><hr>';
}
?>