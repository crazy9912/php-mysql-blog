<?php include 'db.php'; ?>
<!DOCTYPE html><html><head><link rel='stylesheet' href='css/style.css'></head><body>
<h1>Blog Posts</h1>
<a href='login.php'>Admin Login</a><br><br>
<?php
$result = $conn->query('SELECT * FROM posts');
while ($row = $result->fetch_assoc()) {
    echo '<h2>' . htmlspecialchars($row['title']) . '</h2>';
    echo '<p>' . nl2br(htmlspecialchars($row['content'])) . '</p><hr>';
}
?>
</body></html>